# Order form

- Repository: `order-form`
- Type of Challenge: `Learning challenge`
- Duration: `2-3 days`
- Team challenge : `solo`

## 🌱 Must-have features

### Preparation
- Have a look at the provided structure: you get both an index file and another file containing a form. How are these two working together?
> They work together in a SESSION by allowing both pages to use variables freely between them

- Think of a funny / surprising / original name for a store that should definitely exist. (fancy suits for cats? bongo for dates? you name it!)
- Think of some products to sell (feel free to be creative) and update the products array with these.
- Check if all the products & prices are currently visible in the form.

### Step 1: accepting orders
- Show an order confirmation when the user submits the form. This should contain the chosen products and delivery address.
- We will learn how to save this information to a database later, so no need to do this now.

### Step 2: validation
- Use PHP to check the following: ** I did this wrong by using html to do this
    - Required fields are not empty. * put "required" in the input tag
    - Zip code are only numbers. *type number
    - Email address is valid. *type email
- Show any problems (empty or invalid data) with the fields at the top of the form. Tip: use the [bootstrap alerts](https://getbootstrap.com/docs/4.0/components/alerts/) for inspiration. If they are valid, the confirmation of step 1 is shown.
- If the form was not valid, show the previous values in the form so that the user doesn't have to retype everything.

> Usually, validation is a combination of server side checks (for security, these can't be bypassed) and checks in html / JS (can be bypassed but can give live user feedback).

### Step 3: improve UX by saving user data
- Check out the possibilities of the PHP session and cookies.
- We want to prefill the address (you can just use any previous user input, we don't need to get data from anywhere else), as long as the browser isn't closed. Which of these techniques is the better choice here?

> When using cookies on a live site, check any legal requirements.

## 🌼 Nice-to-have features (doable)

### Expanding due to success
- Read about `get` variables and what you can do with it.
- Find commented navigation and activate it. Tweak the content for your own store.
- Make a second category of products, and provide a new array for this info.
- The navigation should work as a toggle to switch between the two categories of products.

### Bulk orders
- Allow the user to specify how much he or she wants to buy of a certain products

### Look & feel
- What kind of style would suit your store? Add a color schema and a suitable font.
- Check what you can do for validation with html and JS. Use this to improve your validation.

## 🌳 Nice-to-have features (hard)

### Delivery times
- Show the expected delivery time in the confirmation message (2h by default).
- A user can opt for express delivery (5$ for delivery in 45min).

### Statistics
- Show statistics about how much money has been spent. This info should be kept (can you use the session or cookies for this?) when the browser closes.
- Include the most popular product (by this user) and amount of products bought by this user.

Sales are almost there... last thing to do is waiting for customers on a shopping spree!

![](https://media.giphy.com/media/iJmi4OLkDgO9aZWS1R/giphy.gif)


## DEFINITIONS
GET = displays in URL (not safe)
POST = stays hidden
COOKIE = stays on local device
SESSION = dead when page closed

## NOTES
Must have a submit. remember isset
READ PHP Require (end of index.php) - a type of linking
READ cookie GPRD requirements - https://gdpr.eu/cookies/
READ form actions - https://www.tutorialrepublic.com/php-tutorial/php-form-handling.php : The action attribute references a PHP file "something.php" that receives the data entered into the form when user submit it by pressing the submit button.
READ require  (conditional rendering)
>>> add     float: left;   to cards  css class

## Steps taken:
1. Zipcode only accepts numbers (<input type="number")
2. Add products
3. Sort out the isset & display all form info on submit. 
4. $product['price'] foreach loop to get $totalValue ? if true, add price, else do nothing ?
5. Error variables with echos for 'alert-danger' bootstrap components for  required fields