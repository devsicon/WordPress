<?php
if ( ! function_exists( 'kumo_single_social' ) ) :
function kumo_single_social() {

    $dmsocialURL = urlencode(get_permalink());

    // Get current page title
    $dmsocialTitle = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));


    // Construct sharing URL without using any script
    $twitterURL = 'https://twitter.com/share?url=' . $dmsocialURL . '&amp;text=' . $dmsocialTitle;
    $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$dmsocialURL;
    $googleURL = 'https://plus.google.com/share?url='.$dmsocialURL;
    $bufferURL = 'https://bufferapp.com/add?url='.$dmsocialURL.'&amp;text='.$dmsocialTitle;
    $whatsappURL = 'whatsapp://send?text='.$dmsocialTitle . ' ' . $dmsocialURL;
    $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$dmsocialURL.'&amp;title='.$dmsocialTitle;

    // Based on popular demand added Pinterest too
    $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$dmsocialURL.'&amp;description='.$dmsocialTitle;
   


    $social_share_links = <<<SOC
        
            <p class="mb-0 mt-4 d-flex align-items-center">
                <span class="me-4">Share:</span>

                <a href="$facebookURL" class="d-inline-flex align-items-center justify-content-center p-3 me-2 gray circle fs-sm text-muted mr-2 target="popup" onclick="window.open('$facebookURL','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                <i class="fab fa-facebook-f position-absolute"></i>
                </a>

                <a href="$twitterURL" class="d-inline-flex align-items-center justify-content-center p-3 me-2 gray circle fs-sm text-muted mr-2 target="popup" onclick="window.open('$twitterURL','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                <i class="fab fa-twitter position-absolute"></i>
                </a>

                <a href="$linkedInURL" class="d-inline-flex align-items-center justify-content-center p-3 me-2 gray circle fs-sm text-muted mr-2 target="popup" onclick="window.open('$linkedInURL','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                <i class="fab fa-linkedin-in position-absolute"></i>
                </a>

                <a href="$whatsappURL" class="d-inline-flex align-items-center justify-content-center p-3 me-2 gray circle fs-sm text-muted mr-2 target="popup" onclick="window.open('$whatsappURL','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                <i class="fab fa-whatsapp position-absolute"></i>
                </a>
                
            </p>
        SOC;

        return $social_share_links;

};
endif;
