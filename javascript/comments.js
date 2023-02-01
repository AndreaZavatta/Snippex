const url_string = window.location.href;
const url = new URL(url_string);
const comments = document.getElementById("comments");


function createNewComment(data) {
    const comment = document.createElement("article");
    comment.class = "comment col-12 col-md-8 mx-auto";
    comment.innerHTML = `
    <article class="comment col-12 col-md-8 mx-auto">
        <h3 class="post-title col-10">~ ${data["User"]}</h3>
        <div class="d-flex justify-content-between">
            <div class="post-content col-12">
                <button class="change-text-button">
                    <p class="post-text">
                        ${data["Content"]}
                    </p>
                </button>
                <p class="post-date col-12">${data["DateAndTime"]}</p>
            </div>
        </div>
    </article>`;
    comment.getElementsByClassName("change-text-button")[0]
        .addEventListener("click", () => changeText(this));
    return comment;
}

axios.get('../php/comments-api.php', {params: {PostID: url.searchParams.get("PostID")}}).then(response => {
   for (let i=0; i<response.data.length; i++) {
         comments.appendChild(createNewComment(response.data[i]));
   }
});