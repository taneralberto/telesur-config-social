<?php

function dc_social_sharing_buttons($content)
{
	if( is_single() )
	{
        $plantilla =
        '<a href="{twitter}" target="_blank">
			<li class="content-area__contenedor__redes__lista__item">
				<svg class="social__icon__svg"><use xlink:href="#icon-twitter" /></svg>
			</li>
		</a>'.
        '<a href="{facebook}" target="_blank">
			<li class="content-area__contenedor__redes__lista__item">
				<svg class="social__icon__svg"><use xlink:href="#icon-facebook" /></svg>
			</li>
		</a>'.
		'<a href="{pinterest}" target="_blank">
			<li class="content-area__contenedor__redes__lista__item">
				<svg class="social__icon__svg"><use xlink:href="#icon-pinterest" /></svg>
			</li>
		</a>'.
		'<a href="{linkedin}" target="_blank">
			<li class="content-area__contenedor__redes__lista__item">
				<svg class="social__icon__svg"><use xlink:href="#icon-linkedin" /></svg>
			</li>
		</a>'.
		'<a href="{whatsapp}" target="_blank">
			<li class="content-area__contenedor__redes__lista__item">
				<svg class="social__icon__svg"><use xlink:href="#icon-whatsapp" /></svg>
			</li>
		</a>';

		$cad			= '';
		$urlArticulo 	= urlencode(get_permalink());
        $titleArticulo 	= str_replace( ' ', '%20', get_the_title());


		$twitterURL		=	'https://twitter.com/intent/tweet?text='.$titleArticulo.'&amp;url='.$urlArticulo.'&amp;via=DecodeCMS';
        $facebookURL 	=	'https://www.facebook.com/sharer/sharer.php?u='.$urlArticulo;
		$pinterestURL 	=	'https://pinterest.com/pin/create/button/?url=&media=&description='.$urlArticulo;
		$whatsappURL 	=	'https://wa.me/?text='.$titleArticulo . ' ' . $urlArticulo;
		$linkedInURL 	=	'https://www.linkedin.com/shareArticle?mini=true&url='.$urlArticulo.'&amp;title='.$titleArticulo;

		$ar_buscar 		= array('{twitter}','{facebook}','{pinterest}','{linkedin}','{whatsapp}');
		$ar_reemplazar 	= array($twitterURL,$facebookURL,$pinterestURL,$linkedInURL,$whatsappURL);

        $cad	.= '<div class="content-area__contenedor__redes">';
		$cad	.= '<ul class="content-area__contenedor__redes__lista">';
        $cad	.=  str_replace($ar_buscar, $ar_reemplazar, $plantilla);
		$cad	.= '</ul>';
		$cad	.= '</div>';

		$content = $cad.$content;
		$content .= $cad;

		return $content;
	}
	else
	{
		return $content;
	}
};

add_filter( 'the_content', 'dc_social_sharing_buttons', 0);