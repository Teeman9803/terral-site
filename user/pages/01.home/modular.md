---
menu: home

form:
    name: contact-form
    action: /home
    fields:
        - name: firstname
          type: honeypot
        - name: name
          label: Name
          placeholder: Enter your name
          autocomplete: on
          type: text
          validate:
            required: true
        - name: email
          label: Email
          placeholder: Enter your email address
          type: text
          validate:
            rule: email
            required: true
        - name: message
          label: Message
          size: long
          placeholder: Enter your message
          type: textarea
          validate:
            required: true
    buttons:
        - type: submit
          value: Submit
          class: submit
    process:
        - email:
            from: "{{ form.value.email }}"
            to: "{{ config.plugins.email.to }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Success!
        - display: thankyou

onpage_menu: true
content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _about
            - _resume
            - _portfolio
            - _call
            - _quotes
            - _contact
---
