(function ( $ ) {
	$( function () {
		/*
		 Class used in edit form and editor models to save/render param type
		 */
		vc.atts.custom_preview = {
			init: function ( param, $wrapper ) {
				console.log( 'vc.atts.custom_preview.init' );
				console.log( param );
				console.log( $wrapper );
				var $input = $wrapper.find( 'input' );
				var currentValue = $input.val();
				var $image = $( '<img src="" />' ).attr( 'src', currentValue );
				var $previewWrapper = $( '<div class="custom-preview-wrapper"></div>' );
				$previewWrapper.prepend( $image );
				$wrapper.prepend( $previewWrapper );
				$wrapper.find( 'input' ).off( 'change.custom keyup.custom' ).on( 'change.custom keyup.custom', function ( e ) {
					$image.attr( 'src', e.currentTarget.value );
				} );
			}
		};
	} );
	window.my_module_on_add = function ( $wrapper, action ) {
		// $wrapper = li.vc_param_group-collapsed
		// action = new/clone
		console.log( 'my_module_on_add callback', $wrapper, action );
	}

})( window.jQuery );
