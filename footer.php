    <footer class="flex justify-between items-center" style="padding-bottom:20px">
    <a href="<?php echo home_url(); ?>">
     
    </a>
     
  </footer>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const faqs = document.querySelectorAll(".faq-question");
      faqs.forEach(q => {
        q.addEventListener("click", function () {
          
          const answer = this.nextElementSibling;
          answer.style.display = (answer.style.display === "flex") ? "none" : "flex";
        });
      });
});
  </script>
</body>
  <?php wp_footer(); ?>
</html>