
import $ from 'jquery'

	let $documentItem = $('.documentItem')
	,		$documentWrap = $('#documentWrap')
	,		$documentContent = $('.documentContent')

	$documentItem.on( 'click', (e) => {
		e.preventDefault()

		let documentID = $(e.currentTarget).data('document-id')
		,		$documentLoad = $(e.currentTarget).data('document-load')

		let value = $(e.currentTarget).text();

	  $('.selectbox__selected').html(value);

	  $('.selectbox__values').toggle();

		if( $documentLoad == true || $documentLoad === undefined ) {
			documentActiveFn( e.currentTarget )
		}
		else {
			$.ajax({
				url: AJAXURL,
				type: 'post',
				data: {
					action: 'post_document',
					documentID
				},
				success: function( response ) {
					$documentWrap.append(response)
					$(e.currentTarget).data('document-load', true)
					documentActiveFn( e.currentTarget )
				}
			});
		}
	})

	function documentActiveFn( el ) {
		const getData = $( el ).data('document-select')
		const $findContentData = $documentWrap.find(`[data-document-content="${getData}"]`)

		$findContentData.addClass('document-content-is-active')
		$findContentData.siblings().removeClass('document-content-is-active')

		$( el ).addClass('document-item-is-active')
		$( el ).siblings().removeClass('document-item-is-active')
	}