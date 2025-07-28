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

        const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
        if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !== accordionItemHeader) {
          currentlyActiveAccordionItemHeader.classList.toggle("active");
          currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        }

        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
          accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        }
        else {
          accordionItemBody.style.maxHeight = 0;
        }

      });
    });
  }
}

export default Accordion;
