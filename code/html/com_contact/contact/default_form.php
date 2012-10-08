<?php
/** $Id: default_form.php 11328 2008-12-12 19:22:41Z kdevine $ */
defined( '_JEXEC' ) or die( 'Restricted access' );

	$script = '<!--
		function validateForm( frm ) {
			var valid = document.formvalidator.isValid(frm);
			if (valid == false) {
				// do field validation
				if (frm.email.invalid) {
					alert( "' . JText::_( 'Please enter a valid e-mail address.', true ) . '" );
				} else if (frm.text.invalid) {
					alert( "' . JText::_( 'CONTACT_FORM_NC', true ) . '" );
				}
				return false;
			} else {
				frm.submit();
			}
		}
		// -->';
	$document = JFactory::getDocument();
	$document->addScriptDeclaration($script);
	
	if(isset($this->error)) : ?>
<tr>
	<td><?php echo $this->error; ?></td>
</tr>
<?php endif; ?>
<tr>
	<div id="contact_form">
	<td colspan="2">
	<br /><br />
	<form action="<?php echo JRoute::_( 'index.php' );?>" method="post" id="emailForm" class="form-validate">
		<div class="contact_email<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
			<label for="contact_name">
				&nbsp;<?php echo JText::_( 'Enter your name' );?>:
			</label>
			<br />
			<div class="nopad"><input type="text" name="name" id="contact_name" size="30" class="inputbox" value="" /></div>
			<br />
			<label id="contact_emailmsg" for="contact_email">
				&nbsp;<?php echo JText::_( 'Email address' );?>:
			</label>
			<br />
			<div class="nopad"><input type="text" id="contact_email" name="email" size="30" value="" class="inputbox required validate-email" maxlength="100" /></div>
			<br />
			<label for="contact_subject">
				&nbsp;<?php echo JText::_( 'Message subject' );?>:
			</label>
			<br />
			<div class="nopad"><input type="text" name="subject" id="contact_subject" size="30" class="inputbox" value="" /></div>
			<br />
			<label id="contact_textmsg" for="contact_text">
				&nbsp;<?php echo JText::_( 'Enter your message' );?>:
			</label>
			<br />
			<textarea cols="50" rows="10" name="text" id="contact_text" class="inputbox required"></textarea>
			<?php if ($this->contact->params->get( 'show_email_copy' )) : ?>
			<br />
				<div class="nopad"><input type="checkbox" name="email_copy" id="contact_email_copy" value="1"  /></div>
				<label for="contact_email_copy">
					<?php echo JText::_( 'EMAIL_A_COPY' ); ?>
				</label>
			<?php endif; ?>

			<button class="button validate" type="submit"><?php echo JText::_('Send'); ?></button>
		</div>
		</div><!-- end contact form container div -->

	<div><input type="hidden" name="option" value="com_contact" /></div>
	<div><input type="hidden" name="view" value="contact" /></div>
	<div><input type="hidden" name="id" value="<?php echo $this->contact->id; ?>" /></div>
	<div><input type="hidden" name="task" value="submit" /></div>
	<div><?php echo JHTML::_( 'form.token' ); ?></div>
	</form>
	<br />
	</td>
</tr>