class searchAutoComplete {
  constructor() {
    this._bindThis();
    this.getDom();
    this.eventListener();
  }
  _bindThis() {
    [].forEach(fn => {
      this[fn] = this[fn].bind(this);
    });
  }
  eventListener() {
    window.addEventListener("load", () => {
      console.log("okok");
    });
  }
  getDom() {
    this.dom = {};
    this.dom.form = document.querySelector(".form");
    this.dom.username = document.querySelector(".username");
    this.dom.description = document.querySelector(".description");
    this.dom.age = document.querySelector(".age");
    this.dom.search = document.querySelector(".search");
    this.dom.resultSearch = document.querySelector(".result-search");
  }
}

export default searchAutoComplete;
