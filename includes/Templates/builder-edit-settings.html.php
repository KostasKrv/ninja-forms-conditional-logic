<!--
    Template used for adding the "Add Condition" button to the Advanced drawer header.
-->
<script id="nf-tmpl-cl-advanced-drawer-header" type="text/template">
    <header class="nf-drawer-header">
        <a class="nf-add-new nf-add-new-condition" title="Add New Condition" href="#" data-drawerid="addField">Add new condition</a>
        <a href="#" title="Done" class="nf-button primary nf-close-drawer" tabindex="-1">Done</a>
    </header>
</script>



<!--
    Template used for conditions on the Advanced domain.
-->
<?php if( false ): ?>
    <script id="nf-tmpl-cl-advanced-condition" type="text/template">
        <!-- Condition Layout View -->
        <div class="nf-condition">
            <div class="nf-first-when-container">
                <div class="nf-condition-label">
                    When
                    <div class="nf-when-controls">
                        <i class="fa fa-chevron-circle-{{{ ( collapsed ) ? 'down' : 'up' }}} nf-collapse-condition" aria-hidden="true"></i>
                        <i class="fa fa-minus-circle nf-remove-condition" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="nf-first-when">

                </div>
            </div>
            <div class="nf-when-container">
                <div class="nf-when-region">
                    <!-- WHEN Region -->
                </div>
                <# if ( ! collapsed ) { #>
                    <i class="fa fa-plus-circle nf-add-when" aria-hidden="true"></i>
                    <# } #>
            </div>
            <# if ( ! collapsed ) { #>
                <div class="nf-then-container">
                    <div class="nf-condition-label">Do</div>
                    <div class="nf-then-region">
                        <!-- THEN Region -->
                    </div>
                    <i class="fa fa-plus-circle nf-add-then" aria-hidden="true"></i>
                </div>

                <div class="nf-else-container">
                    <div class="nf-condition-label">If The Condition Is Not Met</div>
                    <div class="nf-else-region">
                        <!-- ELSE Region -->
                    </div>
                    <i class="fa fa-plus-circle nf-add-else" aria-hidden="true"></i>
                </div>
                <# } #>
        </div>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-advanced-condition" type="text/template">
        <!-- Condition Layout View -->
        <div class="nf-condition">
            <div class="nf-first-when-container">
                <div class="nf-condition-label">
                    When
                    <div class="nf-when-controls">
                        <i class="fa fa-chevron-circle-<%= ( collapsed ) ? 'down' : 'up' %> nf-collapse-condition" aria-hidden="true"></i>
                        <i class="fa fa-minus-circle nf-remove-condition" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="nf-first-when">

                </div>
            </div>
            <div class="nf-when-container">
                <div class="nf-when-region">
                    <!-- WHEN Region -->
                </div>
                <%
                if ( ! collapsed ) {
                %>
                <i class="fa fa-plus-circle nf-add-when" aria-hidden="true"></i>
                <%
                }
                %>
            </div>
            <%
            if ( ! collapsed ) {
            %>
            <div class="nf-then-container">
                <div class="nf-condition-label">Do</div>
                <div class="nf-then-region">
                    <!-- THEN Region -->
                </div>
                <i class="fa fa-plus-circle nf-add-then" aria-hidden="true"></i>
            </div>

            <div class="nf-else-container">
                <div class="nf-condition-label">If The Condition Is Not Met</div>
                <div class="nf-else-region">
                    <!-- ELSE Region -->
                </div>
                <i class="fa fa-plus-circle nf-add-else" aria-hidden="true"></i>
            </div>

            <%
            }
            %>
        </div>
    </script>
<?php endif; ?>

<!--
    Template parts for the Advanced domain conditions display

    First-When-Item is used for the first "when" statement of a condition.
-->
<?php if( false ): ?>
    <script id="nf-tmpl-cl-advanced-first-when-item" type="text/template">
        <div class="nf-setting nf-one-third">
            <label class="nf-select">{{{ renderKeySelect( key, modelType ) }}}<div></div></label>
        </div>
        <div class="nf-setting nf-one-third">
            <label class="nf-select">
                {{{ renderComparators( type, key, comparator ) }}}
                <div></div>
            </label>
        </div>
        <div class="nf-setting nf-one-third">
            <label class="nf-input">
                {{{ renderWhenValue( type, key, comparator, value ) }}}
            </label>
        </div>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-advanced-first-when-item" type="text/template">
        <div class="nf-setting nf-one-third">
            <label class="nf-select"><%= renderKeySelect( key, modelType ) %><div></div></label>
        </div>
        <div class="nf-setting nf-one-third">
            <label class="nf-select">
                <%= renderComparators( type, key, comparator ) %>
                <div></div>
            </label>
        </div>
        <div class="nf-setting nf-one-third">
            <label class="nf-input">
                <%= renderWhenValue( type, key, comparator, value ) %>
            </label>
        </div>
    </script>
<?php endif; ?>


<!--
    When/Then/Else templates
-->
<?php if( false ): ?>
    <script id="nf-tmpl-cl-advanced-when-item" type="text/template">
        <div class="nf-when">
            <div class="nf-setting nf-one-fourth">
                <i class="fa fa-minus-circle nf-remove-when" aria-hidden="true"></i>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">
                    <select data-id="connector" class="setting">
                        <option value="AND" {{{ ( 'AND' == connector ) ? 'selected="selected"' : '' }}}>AND</option>
                        <option value="OR" {{{ ( 'OR' == connector ) ? 'selected="selected"' : '' }}}>OR</option>
                    </select>
                    <div></div>
                </label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">{{{ renderKeySelect( key, modelType ) }}}<div></div></label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">
                    {{{ renderComparators( type, key, comparator ) }}}
                    <div></div>
                </label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-input">
                    {{{ renderWhenValue( type, key, comparator, value ) }}}
                </label>
            </div>
        </div>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-advanced-when-item" type="text/template">
        <div class="nf-when">
            <div class="nf-setting nf-one-fourth">
                <i class="fa fa-minus-circle nf-remove-when" aria-hidden="true"></i>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">
                    <select data-id="connector" class="setting">
                        <option value="AND" <%= ( 'AND' == connector ) ? 'selected="selected"' : '' %>>AND</option>
                        <option value="OR" <%= ( 'OR' == connector ) ? 'selected="selected"' : '' %>>OR</option>
                    </select>
                    <div></div>
                </label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select"><%= renderKeySelect( key, modelType ) %><div></div></label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">
                    <%= renderComparators( type, key, comparator ) %>
                    <div></div>
                </label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-input">
                    <%= renderWhenValue( type, key, comparator, value ) %>
                </label>
            </div>
        </div>
    </script>
<?php endif; ?>

<?php if( false ): ?>
    <script id="nf-tmpl-cl-trigger-item" type="text/template">
        <div class="nf-{{{ modelType }}}">
            <div class="nf-setting nf-one-fourth">
                <i class="fa fa-minus-circle nf-remove-{{{ modelType }}}" aria-hidden="true"></i>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">
                    {{{ renderKeySelect( key, modelType ) }}}
                    <div></div>
                </label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">
                    {{{ renderTriggers( key, trigger, value ) }}}
                    <div></div>
                </label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-input">
                    {{{ renderItemValue( key, trigger, value ) }}}
                </label>
            </div>
        </div>
    </script>
<?php else : ?>
    <script id="nf-tmpl-cl-trigger-item" type="text/template">
        <div class="nf-<%= modelType %>">
            <div class="nf-setting nf-one-fourth">
                <i class="fa fa-minus-circle nf-remove-<%= modelType %>" aria-hidden="true"></i>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">
                    <%= renderKeySelect( key, modelType ) %>
                    <div></div>
                </label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-select">
                    <%= renderTriggers( key, trigger, value ) %>
                    <div></div>
                </label>
            </div>
            <div class="nf-setting nf-one-fourth">
                <label class="nf-input">
                    <%= renderItemValue( key, trigger, value ) %>
                </label>
            </div>
        </div>
    </script>
<?php endif; ?>


<!--
    Templates for our per-action conditions.
    Main condition layout template
-->
<?php if( false ): ?>
    <script id="nf-tmpl-cl-actions-condition-layout" type="text/template">
        <!-- Condition Layout View -->
        <div class="nf-condition actions">
            <div class="nf-when-container">
                <div class="nf-condition-label">
                    <div class="nf-setting nf-one-third">
                        <label class="nf-select">
                            <select class="condition-setting" data-id="process">
                                <option>Select One</option>
                                <option value="1" {{{ ( 1 == process ) ? 'selected="selected"' : '' }}}>Process This</option>
                                <option value="0" {{{ ( 0 == process ) ? 'selected="selected"' : '' }}}>Don't Process This</option>
                            </select>
                            <div></div>
                        </label>
                    </div>
                    <div class="nf-setting nf-one-third action-when-label">
                        When
                    </div>
                    <div class="nf-setting nf-one-third">
                        <label class="nf-select">
                            <select class="condition-setting" data-id="connector">
                                <option value="all" {{{ ( 'all' == connector ) ? 'selected="selected"' : '' }}}>All</option>
                                <option value="any" {{{ ( 'any' == connector ) ? 'selected="selected"' : '' }}}>Any</option>
                            </select>
                            <div></div>
                        </label>
                    </div>
                </div>
                <div class="nf-when">

                </div>
                <i class="fa fa-plus-circle nf-add-when" aria-hidden="true"></i>
            </div>
        </div>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-actions-condition-layout" type="text/template">
        <!-- Condition Layout View -->
        <div class="nf-condition actions">
            <div class="nf-when-container">
                <div class="nf-condition-label">
                    <div class="nf-setting nf-one-third">
                        <label class="nf-select">
                            <select class="condition-setting" data-id="process">
                                <option>Select One</option>
                                <option value="1" <%= ( 1 == process ) ? 'selected="selected"' : '' %>>Process This</option>
                                <option value="0" <%= ( 0 == process ) ? 'selected="selected"' : '' %>>Don't Process This</option>
                            </select>
                            <div></div>
                        </label>
                    </div>
                    <div class="nf-setting nf-one-third action-when-label">
                        When
                    </div>
                    <div class="nf-setting nf-one-third">
                        <label class="nf-select">
                            <select class="condition-setting" data-id="connector">
                                <option value="all" <%= ( 'all' == connector ) ? 'selected="selected"' : '' %>>All</option>
                                <option value="any" <%= ( 'any' == connector ) ? 'selected="selected"' : '' %>>Any</option>
                            </select>
                            <div></div>
                        </label>
                    </div>
                </div>
                <div class="nf-when">

                </div>
                <i class="fa fa-plus-circle nf-add-when" aria-hidden="true"></i>
            </div>
        </div>
    </script>
<?php endif; ?>

<!--
    Template for our action condition "When" statement.
-->
<?php if( false ): ?>
    <script id="nf-tmpl-cl-actions-condition-when" type="text/template">
        <div class="nf-setting nf-one-fourth">
            <i class="fa fa-minus-circle nf-remove-when" aria-hidden="true"></i>
        </div>
        <div class="nf-setting nf-one-fourth">
            <label class="nf-select">{{{ renderKeySelect( key, modelType ) }}}<div></div></label>
        </div>
        <div class="nf-setting nf-one-fourth">
            <label class="nf-select">
                {{{ renderComparators( type, key, comparator ) }}}
                <div></div>
            </label>
        </div>
        <div class="nf-setting nf-one-fourth">
            <label class="nf-input">
                {{{ renderWhenValue( type, key, comparator, value ) }}}
            </label>
        </div>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-actions-condition-when" type="text/template">
        <div class="nf-setting nf-one-fourth">
            <i class="fa fa-minus-circle nf-remove-when" aria-hidden="true"></i>
        </div>
        <div class="nf-setting nf-one-fourth">
            <label class="nf-select"><%= renderKeySelect( key, modelType ) %><div></div></label>
        </div>
        <div class="nf-setting nf-one-fourth">
            <label class="nf-select">
                <%= renderComparators( type, key, comparator ) %>
                <div></div>
            </label>
        </div>
        <div class="nf-setting nf-one-fourth">
            <label class="nf-input">
                <%= renderWhenValue( type, key, comparator, value ) %>
            </label>
        </div>
    </script>
<?php endif; ?>

<!--
    Templates for our component parts:
    Key Select,
    Comparator Select,
    Values (default and field-specific),
    Triggers
-->
<?php if( false ): ?>
    <script id="nf-tmpl-cl-key-select" type="text/template">
        <select data-id="key" class="setting">
            <option value="">Select One</option>
            <optgroup label="Fields">
                <#
                    _.each( fieldCollection.models, function( fieldModel ) {
                    var selected = ( fieldModel.get( 'key' ) == currentValue ) ? 'selected="selected"' : '';
                    #>
                    <option value="<%= fieldModel.get( 'key' ) %>" {{{ selected }}} data-type="field">{{{ fieldModel.get( 'label' ) }}}</option>
                    <# } ); #>
            </optgroup>
            <#
                if ( 'when' == modelType && 0 != calcCollection.models.length ) {
                #>
                <optgroup label="Calculations">
                    <#
                        _.each( calcCollection.models, function( calcModel ) {
                        var selected = ( calcModel.get( 'name' ) == currentValue ) ? 'selected="selected"' : '';
                        #>
                        <option value="<%= calcModel.get( 'name' ) %>" {{{ selected }}} data-type="calc">{{{ calcModel.get( 'name' ) }}}</option>
                        <# } ); #>
                </optgroup>
                <# } #>
                    <# if( 'actions' == currentDomain ) { #>
                        <optgroup label="System">
                            <# var selected = ( 'date_submitted' == currentValue ) ? 'selected="selected"' : ''; #>
                                <option value="date_submitted" data-type="date" {{{ selected }}}>Date Submitted</option>
                        </optgroup>
                        <# } #>
        </select>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-key-select" type="text/template">
        <select data-id="key" class="setting">
            <option value="">Select One</option>
            <optgroup label="Fields">
                <%
                _.each( fieldCollection.models, function( fieldModel ) {
                var selected = ( fieldModel.get( 'key' ) == currentValue ) ? 'selected="selected"' : '';
                %>
                <option value="<%= fieldModel.get( 'key' ) %>" <%= selected %> data-type="field"><%= fieldModel.get( 'label' ) %></option>
                <%
                } );
                %>
            </optgroup>
            <%
            if ( 'when' == modelType && 0 != calcCollection.models.length ) {
            %>
            <optgroup label="Calculations">
                <%
                _.each( calcCollection.models, function( calcModel ) {
                var selected = ( calcModel.get( 'name' ) == currentValue ) ? 'selected="selected"' : '';
                %>
                <option value="<%= calcModel.get( 'name' ) %>" <%= selected %> data-type="calc"><%= calcModel.get( 'name' ) %></option>
                <%
                } );
                %>
            </optgroup>
            <%
            }
            %>
            <% if( 'actions' == currentDomain ) { %>
            <optgroup label="System">
                <% var selected = ( 'date_submitted' == currentValue ) ? 'selected="selected"' : ''; %>
                <option value="date_submitted" data-type="date" <%= selected %>>Date Submitted</option>
            </optgroup>
            <% } %>
        </select>
    </script>
<?php endif; ?>

<?php if( false ): ?>
    <script id="nf-tmpl-cl-comparators" type="text/template">
        <select data-id="comparator" class="setting">
            <option value="">Select One</option>
            <# _.each( comparators, function( comparator ) { #>
                <option value="{{{ comparator.value }}}" {{{ ( comparator.value == currentComparator ) ? 'selected="selected"' : '' }}}>{{{ comparator.label }}}</option>
                <#= } ); #>
        </select>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-comparators" type="text/template">
        <select data-id="comparator" class="setting">
            <option value="">Select One</option>
            <%
            _.each( comparators, function( comparator ) {
            %>
            <option value="<%= comparator.value %>" <%= ( comparator.value == currentComparator ) ? 'selected="selected"' : '' %>><%= comparator.label %></option>
            <%
            } );
            %>
        </select>
    </script>
<?php endif; ?>

<?php if( false ): ?>
    <script id="nf-tmpl-cl-value-default" type="text/template">
        <input type="text" data-id="value" class="setting" value="{{{ value }}}">
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-value-default" type="text/template">
        <input type="text" data-id="value" class="setting" value="<%= value %>">
    </script>
<?php endif; ?>

<?php if( false ): ?>
    <script id="nf-tmpl-cl-value-textarea" type="text/template">
        <textarea data-id="value" class="setting">{{{ value }}}</textarea>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-value-textarea" type="text/template">
        <textarea data-id="value" class="setting"><%= value %></textarea>
    </script>
<?php endif; ?>

<?php if( false ): ?>
    <script id="nf-tmpl-cl-value-checkbox" type="text/template">
        <label class="nf-select">
            <select data-id="value" class="setting">
                <option value="">Select One</option>
                <option value="1" {{{ ( 1 == value ) ? 'selected="selected"': '' }}}>Checked</option>
                <option value="0" {{{ ( 0 === value ) ? 'selected="selected"': '' }}}>Unchecked</option>
            </select>
            <div></div>
        </label>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-value-checkbox" type="text/template">
        <label class="nf-select">
            <select data-id="value" class="setting">
                <option value="">Select One</option>
                <option value="1" <%= ( 1 == value ) ? 'selected="selected"': '' %>>Checked</option>
                <option value="0" <%= ( 0 === value ) ? 'selected="selected"': '' %>>Unchecked</option>
            </select>
            <div></div>
        </label>
    </script>
<?php endif; ?>

<?php if( false ): ?>
    <script id="nf-tmpl-cl-value-list" type="text/template">
        <label class="nf-select">
            <select data-id="value" class="setting">
                <option value="">Select One</option>
                <# _.each( options.models, function( option ) { #>
                    <option value="{{{ option.get( 'value' ) }}}" {{{ ( option.get( 'value' ) === value ) ? 'selected="selected"': '' }}}>{{{ option.get( 'label' ) }}}</option>
                    <# } ); #>

            </select>
            <div></div>
        </label>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-value-list" type="text/template">
        <label class="nf-select">
            <select data-id="value" class="setting">
                <option value="">Select One</option>
                <%
                _.each( options.models, function( option ) {
                %>
                <option value="<%= option.get( 'value' ) %>" <%= ( option.get( 'value' ) === value ) ? 'selected="selected"': '' %>><%= option.get( 'label' ) %></option>
                <%
                } );
                %>

            </select>
            <div></div>
        </label>
    </script>
<?php endif; ?>

<?php if( false ): ?>
    <script id="nf-tmpl-cl-value-date" type="text/template">
        <!-- Date Value Template -->
        <input type="text" data-id="value" class="setting setting-date" value="{{{ value }}}" placeholder="date">
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-value-date" type="text/template">
        <!-- Date Value Template -->
        <input type="text" data-id="value" class="setting setting-date" value="<%= value %>" placeholder="date">
    </script>
<?php endif; ?>

<?php if( false ): ?>
    <script id="nf-tmpl-cl-triggers" type="text/template">
        <select data-id="trigger" class="setting">
            <option value="">Select One</option>
            <# _.each( triggers, function( trigger ) { #>
                <option value="{{{ trigger.value }}}" {{{ ( trigger.value == currentTrigger ) ? 'selected="selected"' : '' }}}>{{{ trigger.label }}}</option>
                <# } ); #>
        </select>
    </script>
<?php else: ?>
    <script id="nf-tmpl-cl-triggers" type="text/template">
        <select data-id="trigger" class="setting">
            <option value="">Select One</option>
            <%
            _.each( triggers, function( trigger ) {
            %>
            <option value="<%= trigger.value %>" <%= ( trigger.value == currentTrigger ) ? 'selected="selected"' : '' %>><%= trigger.label %></option>
            <%
            } );
            %>
        </select>
    </script>
<?php endif; ?>