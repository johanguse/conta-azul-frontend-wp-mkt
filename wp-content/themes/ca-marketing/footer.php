<?php
/**
 * Footer
 *
 * @package WordPress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="footer container py-3">
	<div class="d-flex justify-content-between">
		<div class="logo">
			<svg viewBox="0 0 709.2 100.1" class="logo__img" xmlns="http://www.w3.org/2000/svg">
				<path d="M131.5 23c-23.9 0-39.4 17.8-39.4 38.5C92.2 83 107 100 131.5 100c23.6 0 39.1-18.1 39.1-38.6 0-21.4-14.9-38.4-39.1-38.4zm-.1 58.9c-12.3 0-18-9.9-18-20.5 0-10.4 5.7-20.3 18.1-20.3 12.3 0 17.8 9.8 17.8 20.3.1 10.6-5.5 20.5-17.9 20.5zm-48.9-6.4l-10.5-8c-5 7.6-12.9 12.7-23.7 12.7C31.5 80.2 21.9 67 21.9 50c0-16.4 8.7-30.1 26.8-30.1 10.5 0 17.7 4.7 22.5 12.3L81.8 24c2.4-1.9 3-5.4 1.2-7.9C74.9 4.9 62.3 0 48.5 0 15.4 0 0 24.8 0 49.9 0 79.7 17.7 100 48.2 100c14.6 0 27.4-5.2 35.5-16.7 1.8-2.5 1.2-5.9-1.2-7.8zM226.1 23c-10.5 0-18.9 4.5-24.5 11.8-.2-2-.5-4-.9-6.2-.9-2.6-2.9-3.9-6.2-3.9h-12.4v73.7h21.2V63.3c0-14.9 7.1-22.2 17.7-22.2 8.4 0 13 5 13 15.2v42h21.2V57.1c.1-22.7-10.5-34.1-29.1-34.1zm82.8 58.3c-1.2.4-2.5.6-3.8.6-8.5 0-13.3-5-13.3-15.5v-24h19c3.2 0 5.7-2.6 5.7-5.7v-12h-24.7V14.1c0-3.2-2.6-5.7-5.7-5.7h-15.5v57.2c0 21.3 9.4 34.4 28.1 34.4 11 0 18.7-4.8 22.2-7.5l-5.5-8.8c-1.5-2.1-4.1-3.1-6.5-2.4zM363 23c-11.7 0-20.6 2.2-29.4 8.2-2.9 2-3.4 6-1.2 8.7l5.9 7.3c7.8-6 14.3-7.3 21.9-7.3 9.9 0 16.4 5.3 16.4 16.8v.9c-5.9-2.2-12.6-3.3-20-3.3-21.4 0-30.2 11.5-30.2 23.3 0 11.5 7.6 22.5 26.8 22.5 12.3 0 20.5-5.3 25.4-12.1.2 2 .3 4 .8 6.2.6 2.9 2.9 4.2 6.2 4.2h11V57.7c0-24.2-14.8-34.7-33.6-34.7zm12.9 47.6c-1.2 7.9-7.6 14-19.1 14-6.4 0-10.7-2.5-10.7-8.1 0-5.9 4.2-8.8 14.1-8.8 5.9 0 10.7.8 15.8 2l-.1.9zm209.4 10.1h-33.5l34.7-38.1c2-2.2 2.8-4.2 2.8-7.1V24.7h-57.2c-3.6 0-5.7 2-5.7 5.7v11.9H563l-34.6 38.1c-2 2-2.9 4-2.9 7v10.9h65.6V86.4c0-3.7-2.2-5.7-5.8-5.7zm82.7-56h-16.2v35.2c0 14.9-6.7 22-17.2 22-8.1 0-12.6-5-12.6-15V29.7c0-2.8-2.2-5-5-5h-16.2v41.4c0 22.3 10.4 34 28.7 34 10.2 0 18.3-4.5 24-11.6.2 1.9.5 4 .9 5.9.8 2.8 2.9 4 6.2 4H673V29.7c0-2.8-2.2-5-5-5zm35.5-23.1H688v91c0 3.2 2.6 5.7 5.7 5.7h15.5v-91c0-3.1-2.6-5.7-5.7-5.7zm-224.8 0h-19.9l-37.7 96.8h21.7l8.2-23.1h39.4l8.4 23.1h22.3L485.3 6c-1-3.1-3.4-4.4-6.6-4.4zm-21.8 55.5l13.8-37.2 13.8 37.2h-27.6z" />
			</svg>
		</div>
		<div class="copyright">
			<p>
				&copy; <?php echo date( 'Y' ); ?> - Direitos Reservados - <a href="https://contaazul.com/termos/" onclick="ga('send', 'event', 'Página de Eventos', 'Footer', 'Termos de Uso')">Termos de Uso</a> - <a href="https://contaazul.com/politica/" onclick="ga('send', 'event', 'Página de Eventos', 'Footer', 'Política de Privacidade')">Política de Privacidade</a>
			</p>
		</div>
		<div class="social-media">
			<ul class="footer-sm d-flex flex-row">
				<li class="icon">
					<a href="https://www.instagram.com/contaazul" class="social-link" target="_blank" rel="noopener" onclick="ga('send', 'event', 'Página de Eventos', 'Footer', 'Instagram')">
					<img class="social-link-icon ig" src="<?php echo ASSETS_THEME_URI; ?>/ig.svg" />
					</a>
				</li>
				<li class="icon">
					<a href="https://facebook.com/ContaAzul" class="social-link" target="_blank" rel="noopener" onclick="ga('send', 'event', 'Página de Eventos', 'Footer', 'Facebook')">
					<img class="social-link-icon fb" src="<?php echo ASSETS_THEME_URI; ?>/fb.svg" />
					</a>
				</li>
				<li class="icon">
					<a href="https://twitter.com/ContaAzul" class="social-link" target="_blank" rel="noopener" onclick="ga('send', 'event', 'Página de Eventos', 'Footer', 'Twitter')">
					<img class="social-link-icon twitter" src="<?php echo ASSETS_THEME_URI; ?>/twitter.svg" />
					</a>
				</li>
				<li class="icon">
					<a href="https://www.linkedin.com/company/contaazul" class="social-link" target="_blank" rel="noopener" onclick="ga('send', 'event', 'Página de Eventos', 'Footer', 'LinkedIn')">
					<img class="social-link-icon in" src="<?php echo ASSETS_THEME_URI; ?>/in.svg" />
					</a>
				</li>
				<li class="icon">
					<a href="https://youtube.com/ContaAzulTV" class="social-link" target="_blank" rel="noopener" onclick="ga('send', 'event', 'Página de Eventos', 'Footer', 'Youtube')">
					<img class="social-link-icon youtube" src="<?php echo ASSETS_THEME_URI; ?>/youtube.svg" />
					</a>
				</li>
			</ul>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
