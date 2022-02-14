((Drupal) => {
  Drupal.behaviors.foomami_color = {
    attach: () => {
      const textInputs = document.querySelectorAll(
        '[data-drupal-selector="edit-primary-color"]',
      );

      textInputs.forEach(textInput => {
        const colorInput = document.createElement('input');
        colorInput.type = 'color';

        textInput.after(colorInput);
      })
    },
  };
})(Drupal);
