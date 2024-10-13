( function( api ) {

	// Extends our custom "home-renovation-work" section.
	api.sectionConstructor['home-renovation-work'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );