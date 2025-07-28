class Accordion {
  constructor() {
    this.accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
    if (this.accordionItemHeaders.length > 0) {
      this.events();
    }
  }

  events() {
    this.accordionItemHeaders.forEach(accordionItemHeader => {
      accordionItemHeader.addEventListener("click", event => {

        const imgElement = accordionItemHeader.querySelector('img');
        const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");

        if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !== accordionItemHeader) {
          currentlyActiveAccordionItemHeader.classList.toggle("active");
          currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
          const currentlyActiveImgElement = currentlyActiveAccordionItemHeader.querySelector('img');
          currentlyActiveImgElement.src = myScriptData.templateDirectoryUri + '/images/faq/chevron-down.webp';
        }

        accordionItemHeader.classList.toggle("active");

        const accordionItemBody = accordionItemHeader.nextElementSibling;

        if (accordionItemHeader.classList.contains("active")) {
          accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
          imgElement.src = myScriptData.templateDirectoryUri + '/images/faq/chevron-up.webp';
        }
        else {
          accordionItemBody.style.maxHeight = 0;
          imgElement.src = myScriptData.templateDirectoryUri + '/images/faq/chevron-down.webp';
        }

      });
    });
  }
}

export default Accordion;
