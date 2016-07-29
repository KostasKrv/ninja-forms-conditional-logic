/**
 * Collection view for our and statements
 *
 * @package Ninja Forms Conditional Logic
 * @copyright (c) 2016 WP Ninjas
 * @since 3.0
 */
define( [ 'views/andItem', 'views/firstWhenItem' ], function( AndItem, FirstWhenItem ) {
	var view = Marionette.CollectionView.extend({
		getChildView: function( item ) {
			if ( item.collection.first() == item ) {
				return FirstWhenItem;
			} else {
				return AndItem;
			}
			
		},

		initialize: function( options ) {
			this.whenDiv = options.whenDiv;
			this.conditionModel = options.conditionModel;
		},

    	// The default implementation:
	  	attachHtml: function( collectionView, childView, index ) {
		  	if ( 0 == index ) {
		  		this.whenDiv.append( childView.el );
		  	} else {
		  		if ( ! this.conditionModel.get( 'collapsed' ) ) {
				    if (collectionView.isBuffering) {
				    	// buffering happens on reset events and initial renders
				    	// in order to reduce the number of inserts into the
				    	// document, which are expensive.
				    	collectionView._bufferedChildren.splice(index, 0, childView);
				    } else {
						// If we've already rendered the main collection, append
						// the new child into the correct order if we need to. Otherwise
						// append to the end.
						if (!collectionView._insertBefore(childView, index)){
							collectionView._insertAfter(childView);
						}
				    }			  			
		  		}
		  	}
	  	},

	} );

	return view;
} );