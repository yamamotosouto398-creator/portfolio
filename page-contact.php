<!-- Contact Page -->
<?php get_header(); ?>
<main>
<!-- [email user-email autocomplete:email class:contact-email placeholder "Email"]
[text contact-subject class:contact-subject minlength:5 maxlength:50 placeholder "Subject"]
[textarea contact-content class:contact-content minlength:20 maxlength:200 placeholder] Content [/textarea]
    [submit class:contact-send "Send"] -->
    <div class="clstitle">
       
    </div>
  <div class="modal-content">
    <?php echo do_shortcode('[contact-form-7 id="0c31167" title="Contact"]');?>
  </div>
  
</main>
<?php get_footer(); ?>