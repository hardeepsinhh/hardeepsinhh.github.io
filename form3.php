<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="form.css">

    <title>Contact Form</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4">Contact Form</h2>
        <form action="submit_form.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Product Name:</label>
                <input type="text" class="form-control" name="product" value="Crochet Earring's">
            </div>
            <div class="mb-3">
                <label for="Product_Image" class="form-label">Product Image:</label>
                <img src="earing.jpg" alt="Product_Image" class="img-fluid" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>
</html>
