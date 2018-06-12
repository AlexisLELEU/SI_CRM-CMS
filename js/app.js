class searchAutoComplete {
  constructor() {
    this._bindThis();
    this.getDom();
    this.eventListener();
    this.state = {
      END_POINT: "http://localhost:8888/api.php",
      CLIENT: "/client",
      GET: {
        method: "GET"
      },
      DELETE: {
        method: "DELETE"
      },
      DomDelete: []
    };
  }
  _bindThis() {
    ["handleChange", "renderResultApi", "filterResultApi"].forEach(fn => {
      this[fn] = this[fn].bind(this);
    });
  }
  filterResultApi(resultApi, string) {
    return resultApi.filter(post => {
      const lowerCase = post.lastname.toLowerCase();
      if (!lowerCase.includes(string)) {
        return false;
      }
      return true;
    });
  }
  renderResultApi(resultApi, DELETE, END_POINT, CLIENT) {
    resultApi.map(item => {
      if (item) {
        this.dom.resultSearch.innerHTML += `<div name='${item.id_client}'> ${
          item.lastname
        } ${item.firstname} 
          <button class="delete">X</button> 
          <a href="edit.php?id=${item.id_client}">Update</a>
          </div>`;
      }
    });

    const deleteRow = document.querySelectorAll(".delete");
    for (let i = 0; i < deleteRow.length; i++) {
      deleteRow[i].addEventListener("click", () => {
        let parent = deleteRow[i].parentNode;
        let getID = parent.getAttribute("name");
        fetch(`${END_POINT}${CLIENT}/${getID}`, {
          method: "DELETE"
        }).then(res => {
          parent.remove();
          res.json();
        });
      });
    }
    return resultApi;
  }
  handleChange(pEvt) {
    const { END_POINT, CLIENT, GET, DELETE } = this.state;
    let value = pEvt.target.value;
    fetch(`${END_POINT}${CLIENT}`, GET)
      .then(res => {
        return res.json();
      })
      .then(data => {
        this.dom.resultSearch.innerHTML = "";
        if (pEvt.target.value !== "") {
          let result;
          let string = "";
          value = value.toLowerCase();
          for (let i = 0; i < value.length; i++) {
            string = string + value[i];
          }
          result = this.filterResultApi(data, string);
          return this.renderResultApi(result, DELETE, END_POINT, CLIENT);
        }
      });
  }
  eventListener() {
    if (this.dom.search) {
      this.dom.search.addEventListener("input", this.handleChange);
    }
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

new searchAutoComplete();
