/**
 * Item view for our condition's first when
 *
 * @package Ninja Forms Conditional Logic
 * @copyright (c) 2016 WP Ninjas
 * @since 3.0
 */
define( [], function( ) {
	var view = Marionette.ItemView.extend({
		template: "#nf-tmpl-first-when-item",
				
		events: {
			'change .setting': 'changeSetting'
		},

		changeSetting: function( e ) {
			nfRadio.channel( 'conditions' ).trigger( 'change:setting', e, this.model )
		}
	});

	return view;
} );