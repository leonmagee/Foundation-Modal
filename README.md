# Foundation-Modal
Class to output a Zurb Foundation Modal with an embedded form.
This is set to use a Caldera form, but it can easily be modified to use any type of form.

# Usage

```javascript
var s = "JavaScript syntax highlighting";
alert(s);
```

```
	$form_modal = new foundation_modal_form( 'CF56cb46c389792', 'agent-form-modal', 'Contact Agent' );
	$form_modal->output_modal();
```

```
    <a data-reveal-id="agent-form-modal" class="button contact-agent">Contact Me</a>
```

