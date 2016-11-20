/**
 * @file
 * Behaviors for the Entity Browser Multiselect.
 */

(function ($, _, Drupal, drupalSettings) {
  'use strict';

  Drupal.behaviors.entityBrowserMultiselect = {
    attach: function (context) {

      // Disable the submit for this entity browser until we select an entity.
      $('input.is-entity-browser-submit').attr('disabled', 'disabled');

      // All selectable elements which should receive the click behavior.
      var $selectables = $('[data-selectable]', context);

      // Selector for finding the actual form inputs.
      var input = 'input[name ^= "entity_browser_select"]';

      // Reset the selected entities counter to 0.
      var selectedEntities = 0;

      // When we click on a selectable entity.
      $selectables.on('click', function () {

        // If the cardinality for the validation is more than 1.
        if (drupalSettings.entity_browser_enhanced.multiselect.cardinality > 1) {
          if ($(this).hasClass("selected")) {
            $(this).removeClass('selected').find(input).prop('checked', false);
            selectedEntities--;
          }
          else if (selectedEntities < drupalSettings.entity_browser_enhanced.multiselect.cardinality) {
            $(this).addClass('selected').find(input).prop('checked', true);
            selectedEntities++;
          }
        }
        else if (drupalSettings.entity_browser_enhanced.multiselect.cardinality === -1) {
          // If the cardinality for the validation is unlimited -1.
          if ($(this).hasClass("selected")) {
            $(this).removeClass('selected').find(input).prop('checked', false);
            selectedEntities--;
          }
          else {
            $(this).addClass('selected').find(input).prop('checked', true);
            selectedEntities++;
          }
        }
        else {
          // If the cardinality for the validation is 1 or less.
          // Select the current clicked entity.
          $(this).addClass('selected').find(input).prop('checked', true);
          // Unselect everything else.
          $selectables.not(this).removeClass('selected').find(input).prop('checked', false);

          // Set selected entities counter to one.
          selectedEntities = 1;
        }

        if (selectedEntities >= 1) {
          // Enable the submit button for this entity browser.
          $('input.is-entity-browser-submit').removeAttr('disabled');
        }
        else {
          // Disable the submit button for this entity browser.
          $('input.is-entity-browser-submit').attr('disabled', 'disabled');
        }

      });

      // When we double click on a selectable entity.
      $selectables.on('dblclick', function () {

        // Select the current clicked entity.
        $(this).addClass('selected').find(input).prop('checked', true);
        // Unselect everything else.
        $selectables.not(this).removeClass('selected').find(input).prop('checked', false);

        // Enable the submit button for this entity browser.
        $('input.is-entity-browser-submit').removeAttr('disabled');

        // Auto submit the entity browser form .
        $('input.is-entity-browser-submit').click();
      });
    }
  };

  // Entity Browser Multiselect keyboard behaviors.
  Drupal.behaviors.EntityBrowserMultiselectChangeOnKeyUp = {
    onKeyUp: _.debounce(function () {
      $(this).trigger('change');
    }, 600),

    attach: function (context) {
      $('.keyup-change', context).on('keyup', this.onKeyUp);
    },

    detach: function (context) {
      $('.keyup-change', context).off('keyup', this.onKeyUp);
    }
  };

})(jQuery, _, Drupal, drupalSettings);
