<div class="contact-wrapper" id="contact">
    <div class="contact-sec">
        <h1 class="revalia-regular">Get in touch</h1>
        <div class="contact-sec-card-wrapper">
            <div class="contact-sec-left">
                <div class="contact-sec-left-card">
                    <div class="contact-left-card-text">
                        <p class="roboto pc-1">You can email me here</p>
                        <p class="roboto pc-2">mkloneyrr67@gmail.com</p>
                    </div>
                    <div class="contact-left-card-link"><a href="mailto:mkloneyrr67@gmail.com"><img src="./inc/img/skills-icons/Arrow.svg" alt="arrow"></a></div>
                </div>
                <div class="contact-sec-left-card">
                    <div class="contact-left-card-text">
                        <p class="roboto pc-1">Give me a call</p>
                        <p class="roboto pc-2">+91 8082994366</p>
                    </div>
                    <div class="contact-left-card-link"><a href="tel:+918082994366"><img src="./inc/img/skills-icons/Arrow.svg" alt="arrow"></a></div>
                </div>
            </div>
            <div class="contact-sec-vertical-line"></div>
            <div class="contact-sec-right">
                <div class="contact-sec-right-card">
                    <div class="contact-sec-right-card-left">
                        <input type="text" placeholder="First Name" id="first_name">
                        <input type="text" placeholder="Last Name" id="last_name">
                    </div>
                    <div class="contact-sec-right-card-right">
                        <textarea name="your message" id="message" rows="2" placeholder="Your message"></textarea>
                        <button type="button" id="send_contact">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-icons">
            <a href="https://www.instagram.com/mukeshloney/" target="_blank"><img src="./inc/img/skills-icons/Instagram.svg" alt="Instagram"></a>
            <a href="https://x.com/loney_mukesh" target="_blank"><img src="./inc/img/skills-icons/TwitterX.svg" alt="TwitterX"></a>
            <a href="https://www.linkedin.com/in/mukeshloney/" target="_blank"><img src="./inc/img/skills-icons/LinkedIn.svg" alt="LinkedIn"></a>

        </div>
    </div>
</div>

<script>
    let contact_btn = document.getElementById("send_contact");
    contact_btn.addEventListener("click", function(e) {
        contact_btn.innerHTML = "Sending...";
        setTimeout(add_contact_form, 1000); // Optional delay
    });


    function add_contact_form() {
        let data = new FormData();
        data.append("home_contact", "1"); 
        data.append("first_name", document.getElementById("first_name").value);
        data.append("last_name", document.getElementById("last_name").value);
        data.append("message", document.getElementById("message").value);
     
       

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/send_mail.php", true);

        xhr.onload = function() {
            if (this.responseText.trim() === "Sent") {
                contact_btn.disabled = true;
                contact_btn.innerHTML = "Shared";
                document.getElementById("first_name").value = "";
                document.getElementById("last_name").value = "";
                document.getElementById("message").value = "";
            } else {
                alert("Server error: " + this.responseText);
                contact_btn.innerHTML = "Try Again";
            }
        };

        xhr.send(data);
    }
</script>