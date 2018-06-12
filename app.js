let form = document.querySelector(".form");
let username = document.querySelector(".username");
let description = document.querySelector(".description");
let age = document.querySelectorAll(".age");
let search = document.querySelector(".search");
let resultSearch = document.querySelector(".result-search");

// POST REQUEST FOR ADDING NEW USER INTO DB
// if (form) {
//   form.addEventListener("submit", pEvt => {
//     if (username && description && age !== "") {
//       const usernameVal = username.value;
//       const descriptionVal = description.value;
//       const ageVal = age.value;
//       const body = {
//         name: usernameVal,
//         description: descriptionVal,
//         age: ageVal
//       };
//       fetch("http://localhost:3000/api.php/users/", {
//         method: "POST",
//         body: JSON.stringify(body)
//       }).then(res => {
//         res.json();
//         return window.location.replace("/");
//       });
//     }
//   });
// }
// END

window.addEventListener("load", () => {
  console.log('okok');
  if (search) {
    // AUTO-COMPLETE WITH NAME
    search.addEventListener("input", pEvt => {
      let value = pEvt.target.value;

      fetch("http://localhost:8888/api.php/client/", {
        method: "GET"
      })
        .then(res => {
          console.log(res);
          return res.json();
        })
        .then(data => {
          console.log(data);
          resultSearch.innerHTML = "";
          if (pEvt.target.value !== "") {
            let result;
            let string = "";
            value = value.toLowerCase();
            for (let i = 0; i < value.length; i++) {
              string = string + value[i];
            }
            result = data.filter(post => {
              const lowerCase = post.lastname.toLowerCase();
              if (!lowerCase.includes(string)) {
                return false;
              }
              return true;
            });
            const mapResult = result.map(item => {
              if (item) {
                resultSearch.innerHTML += `<div name='${item.id}'> ${item.lastname} ${item.firstname} 
            <button class="delete">X</button> 
            <a href="edit.php?id=${item.id}">Update</a>
            </div>`;
              }
            });
            // DELETE PART
            let deleteRow = document.querySelectorAll(".delete");
            for (let i = 0; i < deleteRow.length; i++) {
              deleteRow[i].addEventListener("click", () => {
                let parent = deleteRow[i].parentNode;
                let getID = parent.getAttribute("name");
                fetch(`http://localhost:3000/api.php/client/${getID}`, {
                  method: "DELETE"
                }).then(res => {
                  parent.remove();
                  res.json();
                });
              });
            }
            // END DELETE PART
            return mapResult;
          }
        });
    });
  }
});
