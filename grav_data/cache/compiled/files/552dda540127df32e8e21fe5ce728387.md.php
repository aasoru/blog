<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/aaronsosaruiz/Proyectos/blog/grav_data/user/pages/form/contact/form.md',
    'modified' => 1658418586,
    'size' => 1099,
    'data' => [
        'header' => [
            'title' => 'Contact Form',
            'form' => [
                'fields' => [
                    'name' => [
                        'type' => 'text',
                        'label' => 'Name',
                        'validate' => [
                            'required' => true,
                            'message' => 'Please enter your name!'
                        ]
                    ],
                    'email' => [
                        'type' => 'text',
                        'label' => 'Email',
                        'validate' => [
                            'type' => 'email',
                            'required' => true,
                            'message' => 'Please enter your email address!'
                        ]
                    ],
                    'subject' => [
                        'type' => 'text',
                        'label' => 'Subject',
                        'validate' => [
                            'required' => true,
                            'message' => 'Please enter a subject for your message!'
                        ]
                    ],
                    'message' => [
                        'type' => 'textarea',
                        'label' => 'Message',
                        'validate' => [
                            'required' => true,
                            'min' => 10,
                            'message' => 'Email message needs to be more than 10 characters long!'
                        ]
                    ]
                ],
                'buttons' => [
                    'submit' => [
                        'type' => 'submit',
                        'value' => 'Send Email'
                    ]
                ],
                'process' => [
                    'email' => [
                        'from' => '{{ form.value.email }}',
                        'to' => '{{ config.plugins.email.to }}',
                        'subject' => '[Contact] {{ form.value.subject|raw }}',
                        'body' => '{{ form.value.message }}<br /><br />{{ form.value.name }}<br />{{ form.value.email }}'
                    ],
                    'message' => 'Thank you from contacting us!',
                    'display' => '/form/thankyou'
                ]
            ]
        ],
        'frontmatter' => 'title: Contact Form

form:
  fields:
    name:
      type: text
      label: Name
      validate:
        required: true
        message: Please enter your name!
    email:
      type: text
      label: Email
      validate:
        type: email	
        required: true
        message: Please enter your email address!
    subject:
      type: text
      label: Subject
      validate:
        required: true
        message: Please enter a subject for your message!
    message:
      type: textarea
      label: Message
      validate:
        required: true
        min: 10
        message: Email message needs to be more than 10 characters long!

  buttons:
    submit:
      type: submit
      value: Send Email
     
  process:
    email:
      from: "{{ form.value.email }}"
      to: "{{ config.plugins.email.to }}"
      subject: "[Contact] {{ form.value.subject|raw }}"
      body: "{{ form.value.message }}<br /><br />{{ form.value.name }}<br />{{ form.value.email }}"
    message: \'Thank you from contacting us!\'
    display: /form/thankyou
',
        'markdown' => '# Contact Form

  * Required field

'
    ]
];
