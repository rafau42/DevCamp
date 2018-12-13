<footer class="footer">
	<div class="footer__text-box">
		<h3 class="footer__headline">DevCamp</h3>
		<span class="footer__info">
			0-500-500-500
		</span>
	</div>

	<nav class="navigation-footer">
		<?php
						// Display Main Navigation.
						wp_nav_menu( array(
							'theme_location' => 'footer_one',
							'container' => false,
							'menu_class' => 'navigation-footer__list',
							'echo' => true,
							)
						);
          ?>
	</nav>
	<nav class="navigation-footer">
		<?php
						// Display Main Navigation.
						wp_nav_menu( array(
							'theme_location' => 'footer_two',
							'container' => false,
							'menu_class' => 'navigation-footer__list',
							'echo' => true,
							)
						);
					?>
	</nav>

	<div class="footer__social-buttons social-buttons">
		<h3 class="social-buttons__headline">Connect With Us</h3>
		<ul class="social-buttons__list">
			<li class="social-buttons__item">
				<a href="#" class="social-buttons__btn social-buttons__btn--fb" aria-label="facebook" title="facebook">
					<span class="sr-only">Facebook</span>
				</a>
			</li>
			<li class="social-buttons__item">
				<a href="#" class="social-buttons__btn social-buttons__btn--twitter" aria-label="twitter" title="Twitter">
				<span class="sr-only">Twitter</span>
				</a>
			</li>
			<li class="social-buttons__item">
				<a href="#" class="social-buttons__btn social-buttons__btn--yt" aria-label="youtube" title="youtube">
				<span class="sr-only">Youtube</span>
				</a>
			</li>
			<li class="social-buttons__item">
				<a href="#" class="social-buttons__btn social-buttons__btn--linkedin" aria-label="linkedin" title="linkedin">
				<span class="sr-only">Linkedin</span>
				</a>
			</li>
			<li class="social-buttons__item">
				<a href="#" class="social-buttons__btn social-buttons__btn--instagram" aria-label="instagram" title="instagram">
				<span class="sr-only">Instagram</span>
				</a>
			</li>
		</ul>
	</div>

</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>