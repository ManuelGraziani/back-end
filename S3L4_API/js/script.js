const api = "http://localhost/back-end/S3L3_WP/wordpress/wp-json/wp/v2/"
if(document.location.pathname === "/index.html"){
    getPost()
} else if(document.location.pathname === "/utenti.html"){
    getUser()
}


function getPost(){
    let div = document.querySelector(".container")
    fetch(api + "posts?_embed")
    .then(res => res.json())
    .then(data => data.forEach(post => {
        div.innerHTML +=`<div class="card" style="width: 18rem;">
        <img src="${post._embedded["wp:featuredmedia"][0].source_url}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">${post.title.rendered}</h5>
          <p class="card-text">${post.content.rendered}</p>
          <button type="button" class="btn btn-danger" onclick="deletePost(${post.id})">Elimina</button>
        </div>
      </div>`
      console.log(data)
    }))
}

function deletePost(id){
    fetch('curl --user adminApi:P27y gW3G pkIQ SJMv PzIU uQvM' + api + "posts/" + id, {
        method: "DELETE",
        
    })
}

function getUser(){
    let table = document.querySelector("tbody")
    fetch(api + "users")
        .then(res => res.json())
        .then(data => data.forEach(user => {
            table.innerHTML +=
            ` <tr>
                <th scope="row"><img src="${user.avatar_urls[48]}"></th>
                <td>${user.name}</td>
                <td>${user.description}</td>
              </tr>`
          console.log(data)
        }))
}