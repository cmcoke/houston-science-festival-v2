class Marquee {
  constructor() {
    this.root = document.documentElement;
    this.marqueeElementsDisplayed = getComputedStyle(this.root).getPropertyValue("--marquee-elements-displayed");
    this.marqueeContent = document.querySelector("ul.marquee-content");
    if (this.marqueeContent) {
      this.root.style.setProperty("--marquee-elements", this.marqueeContent.children.length);
      this.events();
    }
  }

  events() {
    for (let i = 0; i < this.marqueeElementsDisplayed; i++) {
      this.marqueeContent.appendChild(this.marqueeContent.children[i].cloneNode(true));
    }
  }
}

export default Marquee;
