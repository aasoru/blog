---
title: 'Autorización con Lumen (Laravel) - Gates, qué son y cómo usarlas'
date: '11-07-2022 18:55'
author: 'Aarón Sosa'
taxonomy:
    category:
        - blog
    tag:
        - laravel
        - autorizacion
        - lumen
        - gates
media_order: aaronsosa_blog_gates.jpg
---

<p>Laravel proporciona dos formas principales de autorizar acciones: <strong>Gates</strong> (puertas) y <strong>Policies</strong> (pol&iacute;ticas). La idea es sencilla, las puertas proporcionan un enfoque simple, basado en el cierre de la autorizaci&oacute;n, mientras que las pol&iacute;ticas agrupan la l&oacute;gica en torno a un modelo o recurso en concreto. En este art&iacute;culo vamos a ver un ejemplo usando Lumen de creaci&oacute;n y aplicaci&oacute;n de <strong>Gate</strong></p>
<p>===</p>
<p>Usar esto en tu proyecto de Laravel <strong>es muy &uacute;til cuando tienes diferentes tipos de usuarios con roles espec&iacute;ficos</strong> y necesitas <strong>restringir el acceso</strong> de los usuarios a ciertas acciones.</p>
<p>&nbsp;</p>
<h2>Gates</h2>
<h3>Definici&oacute;n</h3>
<p>Un ejemplo sencillo de Gate, definir&aacute;s tu Gate en <strong>App\Providers\AuthServiceProvider</strong>:&nbsp;</p>
<pre class="block-preformatted">use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
 
/**
 * Register any authentication / authorization services.
 *
 * @return void
 */
public function boot()
{
    $this-&gt;registerPolicies();
 
    Gate::define('update-post', function (User $user, Post $post) {
        return $user-&gt;id === $post-&gt;user_id;
    });
}
</pre>
<p>&nbsp;</p>
<p>Es la forma m&aacute;s sencilla de definirlo, sin embargo no es la &uacute;nica, y en mi caso la autenticaci&oacute;n de usuarios se hace de manera "manual", as&iacute; que lo que hago es definir esta forma en el propio <strong>AuthServiceProvider</strong>:</p>
<pre class="block-preformatted">public function boot(){
        Auth::viaRequest('custom-token', function (Request $request) {
            return Users::where('user_token', $request-&gt;bearerToken())-&gt;first();
        });

        Gate::define('index', function ($user_id, $section_id) {
            return Sections::where('user_id', $user_id)-&gt;where('section_id', $section_id)-&gt;count() &gt; 0
                ? Response::allow()
                : Response::deny("You don't have permission on this section");
        });

</pre>
<h3>Uso en Controlador</h3>
<p>De esta manera ya puedo definir tantas acciones autorizadas como necesite (show, create, edit, destroy, etc), y luego en el controlador tendr&eacute; que hacer algo como esto:</p>
<pre class="block-preformatted">namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
 
class SecitonController extends Controller
{
    /**
     * Show the given section.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!Gate::allows('index', $request-&gt;section_id)
            return response()-&gt;json(['error' =&gt; 'Unauthorized'], 401]);
 
        // If User Authorized ...
    }
}

</pre>
<h2>&nbsp;</h2>
<hr />
<p>Este art&iacute;culo ha sido creado a partir de la documentaci&oacute;n oficial de Laravel que puedes encontrar <a href="https://laravel.com/docs/9.x/authorization">aqu&iacute;</a></p>
<p>Photo by Pixabay: <a href="https://www.pexels.com/photo/door-handle-key-keyhole-279810/" target="_blank" rel="noopener">https://www.pexels.com/photo/door-handle-key-keyhole-279810/</a></p>