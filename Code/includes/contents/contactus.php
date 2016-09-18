<div class="panel" hidden="" id="contact">
    <h2>Contact Information</h2>
    <h5>Company Name</h5>
    224-448 Suspendisse velit nisi,<br />Duis consequat tempus, 10880<br />Cras sit amet ipsum sit
    <div class="cleaner h30"></div>
    <div id="contact_form">
        <form method="post" name="contact" action="includes/widgets/contact.php">
            <label for="author2">Name:</label>
            <input type="text" id="author2" name="author" onblur='checkformfeild("author2","author2_div")' class="required input_field" />
            <div class="cleaner h10"  id="author2_div"></div>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" onblur='checkformfeild("email","email_contact_div")' class="validate-email required input_field" />
            <div class="cleaner h10" id="email_contact_div"></div>

            <label for="text">Message:</label>
            <textarea id="text" name="text" rows="0" cols="0" onblur='checkformfeild("text","text_div")' class="required"></textarea>
            <div class="cleaner h10" id="text_div" ></div>

            <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Send" />
            <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Reset" />
        </form>
    </div>
</div>