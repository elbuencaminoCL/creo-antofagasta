
	import $ from 'jquery'

	let $projectCity = $('.projectCity')
	,		$projectAxis = $('.projectAxis')
	,		$projectRandom = $('.projectRandom')
	,		$projectWrap = $('#projectWrap')
	,		axisLoad = false
	,		randomLoad = false

	$projectAxis.on( 'click', (e) => {
		e.preventDefault()

		if( axisLoad ) {
			projectActiveFn( e.currentTarget )
		}
		else {
			$.ajax({
				url : AJAXURL,
				type : 'post',
				data : {
					action : 'post_project_axis'
				},
				success : function( response ) {
					$projectWrap.append(response)
					axisLoad = true
					projectActiveFn( e.currentTarget )
				}
			});
		}
	})

	$projectRandom.on( 'click', (e) => {
		e.preventDefault()

		if( randomLoad ) {
			projectActiveFn( e.currentTarget )
		}
		else {
			$.ajax({
				url : AJAXURL,
				type : 'post',
				data : {
					action : 'post_project_random'
				},
				success : function( response ) {
					$projectWrap.append(response)
					randomLoad = true
					projectActiveFn( e.currentTarget )
				}
			});
		}
	})

	$projectCity.on( 'click', (e) => {
		e.preventDefault()
		projectActiveFn( e.currentTarget )
	})

	function projectActiveFn( el ) {
		const getData = $( el ).data('project-select')
		const $findContentData = $projectWrap.find(`[data-project-item="${getData}"]`)

		$findContentData.addClass('project-item-is-active')
		$findContentData.siblings().removeClass('project-item-is-active')

		$( el ).addClass('project-is-active')
		$( el ).siblings().removeClass('project-is-active')
	}