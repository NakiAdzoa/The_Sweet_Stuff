const form = document.querySelector(".form"),
    addBtn = form.querySelector("addToCart");

Form.onsubmit = (e) => {
    e.preventDefault();
}
addBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../Actions/add_to_cart.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === "success") {
                    location.href = "../View/all_products.php";
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}