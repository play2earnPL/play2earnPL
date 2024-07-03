<?php

namespace Staatic\Vendor;

/**
 * @var \Staatic\WordPress\Service\Formatter $_formatter
 */
use Staatic\WordPress\Module\Admin\Page\SettingsPage;

?>

<div class="staatic-settings-welcome">
    <div>
        <h2 class="wp-heading-inline">
            <?php 
\esc_html_e('Welcome to Staatic for WordPress', 'staatic');
?>
        </h2>

        <p><?php 
\_e('Thank you for choosing Staatic to enhance your WordPress site’s speed and security to the next level.', 'staatic');
?></p>
        <p><?php 
echo \sprintf(
    /* translators: 1: Link to Getting Started. */
    \__('If you’re new to Staatic, we recommend beginning with our <a href="%1$s" target="_blank" rel="noopener">Getting Started Guide</a> to maximize your site’s potential efficiently.', 'staatic'),
    'https://staatic.com/wordpress/getting-started/'
);
?></p>

        <h2 class="wp-heading-inline">
            <span class="dashicons dashicons-welcome-learn-more"></span>
            <?php 
\esc_html_e('Support', 'staatic');
?>
        </h2>

        <p><?php 
echo \sprintf(
    /* translators: 1: Link to Documentation, %2$s: Link to FAQ. */
    \__('For any inquiries or troubleshooting needs, our <a href="%1$s" target="_blank" rel="noopener">Documentation</a> and <a href="%2$s" target="_blank" rel="noopener">FAQ</a> are your go-to resources. Additionally, ensuring your <a href="%3$s">Site Health</a> is optimal can prevent common issues.', 'staatic'),
    'https://staatic.com/wordpress/documentation/',
    'https://staatic.com/wordpress/faq/',
    \admin_url('site-health.php')
);
?></p>
        <p><?php 
echo \sprintf(
    /* translators: 1: Link to Forums. */
    \__('Need more help? <a href="%1$s" target="_blank" rel="noopener">Open a support forum topic</a>, and our community will assist you.', 'staatic'),
    'https://wordpress.org/support/plugin/staatic/'
);
?></p>
        <p><?php 
echo \sprintf(
    /* translators: 1: Link to Contact. */
    \__('Prefer direct contact? <a href="%1$s" target="_blank" rel="noopener">Reach out to us</a>, and we’ll respond promptly.', 'staatic'),
    'https://staatic.com/wordpress/contact/'
);
?></p>

        <h2 class="wp-heading-inline">
            <span class="dashicons dashicons-star-filled"></span>
            <?php 
\esc_html_e('Giving Back', 'staatic');
?>
        </h2>

        <p><?php 
echo \sprintf(
    /* translators: 1: Link to Review. */
    \__('If you like Staatic for WordPress, <a href="%1$s" target="_blank" rel="noopener">leave us a positive review</a> to support our future development efforts. We genuinely value your contribution and thank you for helping us grow.', 'staatic'),
    'https://wordpress.org/support/plugin/staatic/reviews/#new-post'
);
?></p>

        <p class="staatic-premium-hide"><?php 
echo \sprintf(
    /* translators: 1: Link to Premium Settings. */
    \__('Take your website to the next level by exploring <a href="%1$s">Staatic for WordPress Premium</a>, which includes enhanced functionality for an even more robust experience.', 'staatic'),
    \admin_url(\sprintf('admin.php?page=%s&group=staatic-premium', SettingsPage::PAGE_SLUG))
);
?></p>

        <p><?php 
\esc_html_e('Thank you for being part of our journey to make WordPress faster and more secure.', 'staatic');
?></p>
        </h2>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.3 352.59" class="staatic-badge"><path d="M190.15,312.17l.88-.46c13.12-6.86,95.39-52.52,95.39-117.94,0-71.09-18.33-116.47-18.33-116.47H112.21S93.88,122.68,93.88,193.77c0,65.42,82.27,111.08,95.39,117.94Z" style="fill:#f2b707"/><path d="M189.27,77.3H112.21S93.88,122.68,93.88,193.77c0,65.42,82.27,111.08,95.39,117.94l.88.46V77.3Z" style="fill:#f9d889;opacity:0.52"/><path d="M115.28,141.63a1.48,1.48,0,0,0,1.06-.36l44.35-38.85a1.48,1.48,0,0,0,.14-2.08,1.45,1.45,0,0,0-2.06-.14l-44.36,38.85a1.48,1.48,0,0,0-.14,2.08A1.51,1.51,0,0,0,115.28,141.63Z" style="fill:#fff"/><path d="M113.59,162.93a1.45,1.45,0,0,0,1.06-.35l13.71-12a1.47,1.47,0,0,0-1.93-2.22l-13.7,12a1.46,1.46,0,0,0-.14,2.07A1.41,1.41,0,0,0,113.59,162.93Z" style="fill:#fff"/><path d="M133.77,145.25a1.44,1.44,0,0,0,1.06-.35l17.45-15.28a1.48,1.48,0,0,0,.14-2.08,1.46,1.46,0,0,0-2.07-.14l-17.44,15.28a1.47,1.47,0,0,0-.14,2.07A1.41,1.41,0,0,0,133.77,145.25Z" style="fill:#fff"/><path d="M110.38,184.23a1.42,1.42,0,0,0,1.06-.36l43.86-38.41a1.47,1.47,0,0,0-1.93-2.22l-43.85,38.42a1.47,1.47,0,0,0-.14,2.07A1.41,1.41,0,0,0,110.38,184.23Z" style="fill:#fff"/><path d="M123.27,192.79a1.43,1.43,0,0,0,1.06-.36l12.46-10.91a1.47,1.47,0,0,0-1.93-2.22l-12.45,10.92a1.47,1.47,0,0,0-.15,2.07A1.43,1.43,0,0,0,123.27,192.79Z" style="fill:#fff"/><path d="M144,174.68a1.46,1.46,0,0,0,1.06-.36l36-31.54a1.47,1.47,0,0,0-1.93-2.22l-36,31.54a1.47,1.47,0,0,0-.14,2.08A1.49,1.49,0,0,0,144,174.68Z" style="fill:#fff"/><path d="M110.18,223.2a1.41,1.41,0,0,0,1.06-.36l69.28-60.67a1.48,1.48,0,0,0,.14-2.08,1.46,1.46,0,0,0-2.07-.14l-69.27,60.68a1.47,1.47,0,0,0-.14,2.07A1.41,1.41,0,0,0,110.18,223.2Z" style="fill:#fff"/><path d="M144.13,213.3a1.48,1.48,0,0,0,1.06-.36l30.9-27.07a1.47,1.47,0,0,0-1.93-2.21l-30.89,27.06a1.48,1.48,0,0,0-.15,2.08A1.51,1.51,0,0,0,144.13,213.3Z" style="fill:#fff"/><path d="M173.68,290.2a1.41,1.41,0,0,0,1.06-.36l5.5-4.81a1.48,1.48,0,0,0,.14-2.08,1.46,1.46,0,0,0-2.06-.14l-5.5,4.82a1.47,1.47,0,0,0-.14,2.07A1.41,1.41,0,0,0,173.68,290.2Z" style="fill:#fff"/><path d="M140.57,262.83a1.47,1.47,0,0,0,1.06-.35l5.49-4.82a1.47,1.47,0,0,0-1.92-2.22l-5.5,4.82a1.47,1.47,0,0,0-.14,2.07A1.43,1.43,0,0,0,140.57,262.83Z" style="fill:#fff"/><path d="M152.62,270.26a1.43,1.43,0,0,0,1.06-.36L169,257.66a1.47,1.47,0,0,0-1.93-2.22l-15.35,12.24a1.47,1.47,0,0,0,.87,2.58Z" style="fill:#fff"/><path d="M115.28,103.71a1.43,1.43,0,0,0,1.06-.36l5.5-4.81a1.49,1.49,0,0,0,.14-2.08,1.47,1.47,0,0,0-2.07-.14l-5.5,4.81a1.48,1.48,0,0,0-.14,2.08A1.43,1.43,0,0,0,115.28,103.71Z" style="fill:#fff"/><path d="M144.78,231.24a1.51,1.51,0,0,0,1.06-.36L176.49,204a1.47,1.47,0,0,0-1.93-2.22l-30.64,26.85a1.47,1.47,0,0,0,.86,2.58Z" style="fill:#fff"/><path d="M113.91,123.21a1.45,1.45,0,0,0,1.06-.36l15.95-14a1.48,1.48,0,0,0,.14-2.08,1.46,1.46,0,0,0-2.06-.14l-16,14a1.47,1.47,0,0,0,.86,2.58Z" style="fill:#fff"/><path d="M160.73,280a1.43,1.43,0,0,0,1.06-.36l23.66-20.72a1.47,1.47,0,0,0-1.93-2.22l-23.66,20.72a1.49,1.49,0,0,0-.14,2.08A1.43,1.43,0,0,0,160.73,280Z" style="fill:#fff"/><ellipse cx="184.78" cy="296.79" rx="1.49" ry="1.49" style="fill:#fff"/><ellipse cx="152.78" cy="251.77" rx="1.49" ry="1.49" style="fill:#fff"/><ellipse cx="159.71" cy="138.71" rx="1.49" ry="1.49" style="fill:#fff"/><ellipse cx="108.82" cy="127.04" rx="1.49" ry="1.49" style="fill:#fff"/><path d="M315.73,222H64.56a12.75,12.75,0,0,1-12.72-12.79V158.9a12.75,12.75,0,0,1,12.72-12.79H315.73a12.76,12.76,0,0,1,12.73,12.79v50.34A12.76,12.76,0,0,1,315.73,222Z" style="fill:#1a6e84"/><path d="M59.08,197v-1.64a1.68,1.68,0,0,1,1.77-1.92h4.88a1.66,1.66,0,0,1,1.77,1.85v1.56c0,4.91,2.4,6.83,9.19,6.83,6.94,0,9.34-1.85,9.34-7.18V195.1c0-3.49-1.84-4.48-5.51-5.26l-9.56-2c-7.07-1.5-11.53-3.7-11.53-12.66v-1.42c0-9.6,5.94-14.57,17.41-14.57,12.1,0,17.33,4.05,17.33,13.43v1.42A1.69,1.69,0,0,1,92.4,176H87.59a1.71,1.71,0,0,1-1.84-1.84V172.7c0-4.76-2.33-6.68-8.84-6.68s-8.85,1.78-8.85,7.11v1.35c0,3.48,1.84,4.48,5.45,5.26l9.55,2c7.08,1.49,11.61,3.77,11.61,12.66v1.49c0,9.6-6.16,14.64-17.9,14.64C64.38,210.52,59.08,206.47,59.08,197Z" style="fill:#fff"/><path d="M112.71,207.25v-40h-12a2.17,2.17,0,0,1-2.41-2.42v-2.42a2.17,2.17,0,0,1,2.41-2.41h32.62a2.17,2.17,0,0,1,2.4,2.41v2.42a2.17,2.17,0,0,1-2.4,2.42h-12v40a2.34,2.34,0,0,1-2.48,2.49h-3.75A2.34,2.34,0,0,1,112.71,207.25Z" style="fill:#fff"/><path d="M134.71,207.47a6.73,6.73,0,0,1,.42-2l13-41.59c1-3.13,2.2-4.12,5-4.12h4.81c2.76,0,4,1,5,4.12l13,41.59a6.73,6.73,0,0,1,.42,2c0,1.35-.85,2.27-2.61,2.27h-3c-1.84,0-2.54-.64-3.18-2.7L164,195.52H146.74L143.27,207c-.64,2.06-1.34,2.7-3.18,2.7h-2.76C135.56,209.74,134.71,208.82,134.71,207.47Zm27.1-19.34-6.44-21.54-6.44,21.54Z" style="fill:#fff"/><path d="M179.85,207.47a6.73,6.73,0,0,1,.42-2l13-41.59c1-3.13,2.19-4.12,5-4.12h4.82c2.75,0,4,1,4.95,4.12l13,41.59a6.73,6.73,0,0,1,.42,2c0,1.35-.85,2.27-2.62,2.27h-3c-1.84,0-2.55-.64-3.18-2.7l-3.47-11.52H191.88L188.41,207c-.64,2.06-1.35,2.7-3.18,2.7h-2.76C180.7,209.74,179.85,208.82,179.85,207.47ZM207,188.13l-6.44-21.54-6.44,21.54Z" style="fill:#fff"/><path d="M234.75,207.25v-40h-12a2.17,2.17,0,0,1-2.4-2.42v-2.42a2.17,2.17,0,0,1,2.4-2.41h32.62a2.17,2.17,0,0,1,2.41,2.41v2.42a2.17,2.17,0,0,1-2.41,2.42h-12v40a2.34,2.34,0,0,1-2.47,2.49h-3.75A2.34,2.34,0,0,1,234.75,207.25Z" style="fill:#fff"/><path d="M264.89,207.25V162.47a2.34,2.34,0,0,1,2.48-2.49h3.75a2.34,2.34,0,0,1,2.47,2.49v44.78a2.34,2.34,0,0,1-2.47,2.49h-3.75A2.34,2.34,0,0,1,264.89,207.25Z" style="fill:#fff"/><path d="M284.7,192.82V176.9c0-11.31,6.65-17.7,18.54-17.7,12.24,0,18,5.19,18,16.06v1.35a1.69,1.69,0,0,1-1.77,1.92h-4.95a1.66,1.66,0,0,1-1.77-1.85v-1.42c0-6.4-2.76-9-9.55-9-6.37,0-9.7,3.35-9.7,9.89V193.6c0,6.54,3.33,9.89,9.7,9.89,6.79,0,9.55-2.64,9.55-9v-1.92a1.66,1.66,0,0,1,1.77-1.85h4.95a1.69,1.69,0,0,1,1.77,1.92v1.85c0,10.87-5.8,16.06-18,16.06C291.35,210.52,284.7,204.13,284.7,192.82Z" style="fill:#fff"/><path d="M55.21,246.28V235.06h-2a.75.75,0,0,1-.81-.78v-1.36a.75.75,0,0,1,.81-.79h2v-2c0-2.69,1.14-3.92,4.15-3.92H61c.88,0,1.3.36,1.3,1.08v.88a1,1,0,0,1-1.08,1H59.69c-.69,0-1,.3-1,1v2H61.5a.75.75,0,0,1,.81.79v1.36a.75.75,0,0,1-.81.78H58.82v11.22a1,1,0,0,1-1,1.05H56.26A1,1,0,0,1,55.21,246.28Z" style="fill:#1a6e84"/><path d="M63.42,243.16v-.24c0-3.11,2-4.56,6.11-4.56a14.36,14.36,0,0,1,3.18.36v-2.21c0-1.3-.84-1.9-2.67-1.9s-2.56.45-2.56,1.54v.15a.56.56,0,0,1-.63.64H64.68a.61.61,0,0,1-.66-.67v-.15c0-2.75,2.17-4.32,6-4.32,4.15,0,6.28,1.66,6.28,4.95v6.56l1.35,1.36a1.24,1.24,0,0,1,.07,1.88l-.61.6a1.21,1.21,0,0,1-1.86-.06l-1.5-1.51a5.71,5.71,0,0,1-4.64,2.09C65.53,247.67,63.42,246,63.42,243.16Zm6.29,1.76c1.74,0,3-1,3-2.39v-1.39a10.43,10.43,0,0,0-2.88-.4c-1.93,0-2.89.67-2.89,2V243C66.94,244.28,67.87,244.92,69.71,244.92Z" style="fill:#1a6e84"/><path d="M80.26,243.4v-.21a.54.54,0,0,1,.6-.57H83a.46.46,0,0,1,.51.51v.18c0,1.12.93,1.64,3,1.64,1.92,0,2.92-.61,2.92-1.76v-.36c0-.91-.43-1.24-1.36-1.36L84.26,241c-2.85-.37-4-1.61-4-4.11v-.25c0-3.08,2.23-4.83,6.2-4.83s6.07,1.42,6.07,4.23v.15a.56.56,0,0,1-.57.6H89.8a.48.48,0,0,1-.54-.51v-.15c0-1.09-.88-1.6-2.8-1.6s-2.86.54-2.86,1.72v.3c0,.94.45,1.27,1.41,1.39l3.88.49c2.83.36,3.94,1.6,3.94,4.08v.33c0,3-2.28,4.84-6.25,4.84Q80.27,247.67,80.26,243.4Z" style="fill:#1a6e84"/><path d="M97.26,243v-7.89h-2a.75.75,0,0,1-.81-.78v-1.36a.75.75,0,0,1,.81-.79h2v-3a1.22,1.22,0,0,1,1.29-1.33h1a1.23,1.23,0,0,1,1.3,1.33v3h3a.76.76,0,0,1,.82.79v1.36a.76.76,0,0,1-.82.78h-3v7.86c0,1.06.36,1.42,1.38,1.42h1.65a.77.77,0,0,1,.82.82v1.27a.82.82,0,0,1-.88.9h-1.77C98.52,247.33,97.26,246.19,97.26,243Z" style="fill:#1a6e84"/><path d="M112.11,241.74v-.69a5.12,5.12,0,0,1,4-5.2,5.69,5.69,0,0,1-1.86-4.35v-.31c0-3.35,2.47-5.35,6.19-5.35,4,0,6.11,1.73,6.11,5.14v.88a.68.68,0,0,1-.72.72h-2.11a.64.64,0,0,1-.66-.69v-1c0-1.39-.93-2.15-2.62-2.15s-2.58.79-2.58,2.18v.36a3.43,3.43,0,0,0,1.23,2.63l5.69,5.81,1.56-2.69a1.47,1.47,0,0,1,1.44-.94h1.33c.6,0,1,.3,1,.82a2.07,2.07,0,0,1-.45,1.11l-2.35,4,2.44,2.45a1.76,1.76,0,0,1-.09,2.66,1.87,1.87,0,0,1-2.62-.18l-1.89-2c-1.36,1.81-3.13,2.78-6.14,2.78C114.55,247.67,112.11,245.61,112.11,241.74Zm6.92,3a3.87,3.87,0,0,0,3.7-2.09L118.22,238a2.57,2.57,0,0,0-2.44,2.66v.94C115.78,243.71,116.87,244.77,119,244.77Z" style="fill:#1a6e84"/><path d="M138,243.4v-.21a.54.54,0,0,1,.6-.57h2.17a.46.46,0,0,1,.51.51v.18c0,1.12.93,1.64,3,1.64,1.93,0,2.92-.61,2.92-1.76v-.36c0-.91-.42-1.24-1.35-1.36L142,241c-2.86-.37-4-1.61-4-4.11v-.25c0-3.08,2.22-4.83,6.19-4.83s6.08,1.42,6.08,4.23v.15a.56.56,0,0,1-.57.6h-2.17a.48.48,0,0,1-.54-.51v-.15c0-1.09-.87-1.6-2.8-1.6s-2.85.54-2.85,1.72v.3c0,.94.45,1.27,1.41,1.39l3.88.49c2.83.36,3.94,1.6,3.94,4.08v.33c0,3-2.29,4.84-6.26,4.84Q138,247.67,138,243.4Z" style="fill:#1a6e84"/><path d="M153.53,241.83v-4c0-3.9,2.34-6,6.7-6s6.59,2,6.59,5.77v2.18c0,.84-.39,1.27-1.23,1.27h-8.48v1.18c0,1.9,1,2.72,3.39,2.72,1.78,0,2.68-.52,2.68-1.55v-.09c0-.33.12-.45.48-.45h2.47a.44.44,0,0,1,.48.48v.12c0,2.82-2.07,4.24-6.13,4.24C155.9,247.67,153.53,245.67,153.53,241.83Zm3.58-4.62v1.12h6.25v-1.12c0-1.79-1.11-2.72-3.16-2.72S157.11,235.42,157.11,237.21Z" style="fill:#1a6e84"/><path d="M170,241.59v-3.66c0-3.87,2.44-6.13,6.71-6.13,4.06,0,6.43,1.66,6.43,5v.45a.68.68,0,0,1-.72.72h-2.11a.64.64,0,0,1-.66-.69V237c0-1.58-.81-2.36-2.94-2.36s-3,1-3,3.08v4c0,2.06.93,3,3,3s2.94-.72,2.94-2.29V242a.64.64,0,0,1,.66-.69h2.11a.68.68,0,0,1,.72.72v.55c0,3.38-2.37,5-6.43,5C172.45,247.67,170,245.4,170,241.59Z" style="fill:#1a6e84"/><path d="M186.76,241.53v-8.34a1,1,0,0,1,1.05-1.06h1.51a1,1,0,0,1,1.05,1.06v8.34c0,2.06,1,3.17,3,3.17s3-1.08,3-3.17v-8.34a1,1,0,0,1,1.06-1.06H199a1,1,0,0,1,1.05,1.06v10.12l1.36,1.36a1.25,1.25,0,0,1,.06,1.88l-.6.6a1.22,1.22,0,0,1-1.87-.06l-1.53-1.54a5.07,5.07,0,0,1-4.48,2.12C189.23,247.67,186.76,245.46,186.76,241.53Z" style="fill:#1a6e84"/><path d="M205.44,246.28V236.15l-1.36-1.36a1.24,1.24,0,0,1-.06-1.87l.61-.61a1.23,1.23,0,0,1,1.86.06l1.72,1.73a3.79,3.79,0,0,1,3.42-2.09H212c1.39,0,2.11.57,2.11,1.63v.3a1.49,1.49,0,0,1-1.68,1.51H212c-2,0-2.94,1.06-2.94,3.18v7.65a1,1,0,0,1-1.06,1.05h-1.5A1,1,0,0,1,205.44,246.28Z" style="fill:#1a6e84"/><path d="M215.69,241.83v-4c0-3.9,2.35-6,6.71-6s6.59,2,6.59,5.77v2.18c0,.84-.39,1.27-1.24,1.27h-8.48v1.18c0,1.9,1,2.72,3.4,2.72,1.78,0,2.68-.52,2.68-1.55v-.09c0-.33.12-.45.48-.45h2.47a.44.44,0,0,1,.48.48v.12c0,2.82-2.08,4.24-6.14,4.24C218.07,247.67,215.69,245.67,215.69,241.83Zm3.58-4.62v1.12h6.26v-1.12c0-1.79-1.11-2.72-3.16-2.72S219.27,235.42,219.27,237.21Z" style="fill:#1a6e84"/><path d="M326.28,241.87h-88.9a1.93,1.93,0,0,1,0-3.86h88.9a1.93,1.93,0,0,1,0,3.86Z" style="fill:#1a6e84"/><path d="M192.24,116l.8.08Z" style="fill:#1b6e83"/><path d="M165.21,95.79c6.06,8.55,8.43,11,19.69,11,18.46,0,38.55-7.72,41-30.3.5-4.53-.92-8.91-2.57-12.87a33.41,33.41,0,1,0-34.91,51.7A33.47,33.47,0,0,1,165.21,95.79Z" style="fill:#1b6e83"/><path d="M189.7,115.6q1,.2,2.07.33Q190.74,115.8,189.7,115.6Z" style="fill:#1b6e83"/><path d="M195.82,116.19h0Z" style="fill:#1b6e83"/><path d="M194.48,116.16l-.66,0Z" style="fill:#1b6e83"/><path d="M188.48,115.35l1.19.25Z" style="fill:#1b6e83"/><circle cx="212.29" cy="60.28" r="19.85" style="fill:#1b6e83"/><path d="M212.29,40.43a19.8,19.8,0,0,0-15,6.86h.07a1,1,0,0,1,.26,0l-.26,0-.11,0-.37.44a1.05,1.05,0,0,0,0,.26c8.59-1.56,17.18-.78,22.64,5.47,4.23,4.75,7.25,11.1,9.8,17a20.13,20.13,0,0,0,2.86-10.27A19.84,19.84,0,0,0,212.29,40.43Z" style="fill:#1b6e83"/><polygon points="145.94 62.59 124.17 51.26 128.62 48.48 147.79 58.8 145.94 62.59" style="fill:#fff"/><path d="M115.39,46.37s4.35,2.48,10.88,6l4.06,2.1,2-2.45a.88.88,0,0,1,1.36,1.12l-1.77,2.16,1.75.91,1.56-1.89a.88.88,0,0,1,1.36,1.12l-1.31,1.6,1.51.78L139,55.24a.88.88,0,0,1,1.37,1.12l-1.91,2.34,1.55.8,1.2-1.45a.88.88,0,0,1,1.24-.13.89.89,0,0,1,.12,1.25l-.95,1.16,1.7.88,2.05-2.49a.88.88,0,0,1,1.24-.13.89.89,0,0,1,.12,1.25l-1.8,2.2,10.29,5.33C167,73.05,178,77.65,182.82,77.65c12.53,0,22.69-7,22.69-15.64s-10.16-15.64-22.69-15.64Zm11.91,4.89a.5.5,0,0,1,0-.17.85.85,0,0,1,.13-.32.69.69,0,0,1,.11-.13.9.9,0,0,1,.8-.25,1,1,0,0,1,.16.06.8.8,0,0,1,.16.08l.13.11a.69.69,0,0,1,.11.13.85.85,0,0,1,.13.32,1,1,0,0,1,0,.17.88.88,0,0,1,0,.17.84.84,0,0,1-.05.17.71.71,0,0,1-.08.15.76.76,0,0,1-.11.14l-.13.11a.8.8,0,0,1-.16.08l-.16.05-.18,0a.9.9,0,0,1-.62-.26.76.76,0,0,1-.11-.14.71.71,0,0,1-.08-.15.84.84,0,0,1-.05-.17A.47.47,0,0,1,127.3,51.26Z" style="fill:#1b6e83"/><path d="M216.64,46.43a17.38,17.38,0,0,0-20.36,2.14,14.61,14.61,0,0,1,1.4,1.56c.56,0,1.13,0,1.7,0a35.22,35.22,0,0,1,26,11.41A17.38,17.38,0,0,0,216.64,46.43Z" style="fill:#cf5c3d"/><path d="M225.35,61.5c1.35,10.26.51,13.27.51,13.27L239,99.08a14.26,14.26,0,0,0,1.53-2.69Z" style="fill:#cd9b14"/><path d="M240.51,96.39A14.26,14.26,0,0,1,239,99.08l8.67,15.4Z" style="fill:#826515"/><circle cx="225.35" cy="61.76" r="1.9" style="fill:#fff"/><path d="M186.74,77.08a7.14,7.14,0,0,1-1.13-.11c-2.58-.43-6.76-2.14-12.42-5.09-14.47-7.53-34.69-21.08-40.37-24.94h53.92a19.89,19.89,0,0,1,13.94,5.39A15.86,15.86,0,0,1,202,53.84a13.3,13.3,0,0,1,2.9,7.78c0,.13,0,.26,0,.39s0,.26,0,.38C204.69,70.49,196.52,77.08,186.74,77.08Z" style="fill:#f2b707"/><path d="M186.74,47.52a19.29,19.29,0,0,1,13.54,5.22,14.91,14.91,0,0,1,1.3,1.46,12.7,12.7,0,0,1,2.78,7.46v.72c-.24,7.79-8.14,14.12-17.62,14.12a6.84,6.84,0,0,1-1-.09c-2.52-.42-6.65-2.12-12.26-5-13.33-6.94-31.58-19-38.76-23.85h52.05m0-1.15H131s24.83,17.11,42,26c5.22,2.72,9.72,4.67,12.59,5.15a8,8,0,0,0,1.22.11c10.2,0,18.51-6.79,18.76-15.24,0-.13,0-.27,0-.4h0c0-.13,0-.27,0-.4a13.84,13.84,0,0,0-3-8.12,14.7,14.7,0,0,0-1.4-1.57,20.39,20.39,0,0,0-14.34-5.55Z" style="fill:#f2b707"/><polygon points="203.43 129.45 191.05 120.62 194.24 118.27 206.13 126.37 203.43 129.45" style="fill:#fff"/><path d="M167,100c1.73,3.38,8.93,9.48,17.16,15.71l10.87,7.76,2-2a.88.88,0,0,1,1.25,1.25l-1.78,1.78,1.42,1,1-1a.88.88,0,0,1,1.25,0,.89.89,0,0,1,0,1.25l-.82.82,1.54,1.1,2.1-2.09a.88.88,0,0,1,1.25,1.25l-1.89,1.89,2.69,1.91c4.85,3.3,8.15,5.46,8.15,5.46L189,88.77h0c-4.51-8.79-13.08-13.41-19.14-10.3S162.53,91.23,167,100Zm26.31,20.8a.88.88,0,0,1,0-.17.84.84,0,0,1,0-.17.71.71,0,0,1,.08-.15.76.76,0,0,1,.11-.14l.13-.11a.8.8,0,0,1,.16-.08l.16,0a1,1,0,0,1,.35,0l.17,0,.15.08.13.11a.92.92,0,0,1,.26.63.9.9,0,0,1-.26.62.85.85,0,0,1-.62.26.88.88,0,0,1-.63-.26.69.69,0,0,1-.11-.13.85.85,0,0,1-.13-.32A1,1,0,0,1,193.35,120.82Z" style="fill:#1b6e83"/><path d="M206.29,123.78c-5.17-2.84-21.43-11.9-31.67-19.17-4.09-2.91-6.79-5.22-8-6.87a4.64,4.64,0,0,1-.47-.73c-3.49-6.81-1.83-14.84,3.71-17.89l.27-.14.24-.12a9.94,9.94,0,0,1,4.34-1,11.87,11.87,0,0,1,2.12.2,13.61,13.61,0,0,1,1.52.4,15.61,15.61,0,0,1,8.74,7.79Z" style="fill:#cf5c3d"/><path d="M174.7,78.46h0a10.7,10.7,0,0,1,2,.2,10.81,10.81,0,0,1,1.46.38,15,15,0,0,1,8.4,7.5L188,89.3l16.94,33.07c-6.37-3.53-20.66-11.62-30-18.23-4-2.87-6.7-5.14-7.88-6.74a5,5,0,0,1-.42-.65c-3.35-6.54-1.79-14.22,3.48-17.12a2,2,0,0,1,.25-.14l.25-.13a9.53,9.53,0,0,1,4.07-.9m0-1.14a10.52,10.52,0,0,0-4.56,1l-.28.14-.28.15c-5.84,3.22-7.62,11.49-4,18.65a5.24,5.24,0,0,0,.52.82c1.36,1.84,4.36,4.3,8.14,7,12.42,8.82,33.36,20.1,33.36,20.1s-13.33-26-18.65-36.4L187.59,86A16.1,16.1,0,0,0,178.53,78a11.56,11.56,0,0,0-1.61-.42,11.92,11.92,0,0,0-2.22-.21Z" style="fill:#cf5c3d"/></svg>
</div>
<?php 
