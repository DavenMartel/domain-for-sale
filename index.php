<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sales Inquery || <?=$_SERVER['SERVER_NAME']?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:300,700" rel="stylesheet">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>

        <section class="bg-alt hero p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 bg-faded text-center col-fixed">
                        <div class="vMiddle">
                          <h1 class="pt-4 h2">
                              <span class="text-green"><?=$_SERVER['SERVER_NAME']?></span>
                              <small>is available for sale</small>
                          </h1>
                          <p class="mt-4">
                              Instant purchase available.
                          </p>
                          <div class="pt-5">
                              <label for="name">
                              <a class="btn text-white bg-green btn-lg" href="https://buy.stripe.com/00gfZMd7WgF72aY3cc">Buy now for $11 000</a>
                              </label>
                          </div>
                          <div class="row d-md-flex text-center justify-content-center text-primary action-icons">
                              <div class="col-sm-4">
                                  <p><em class="ion-ios-chatbubble-outline icon-md"></em></p>
                                  <p class="lead"><a href="mailto:buy@<?=$_SERVER['SERVER_NAME']?>">buy@<?=$_SERVER['SERVER_NAME']?></a></p>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="col-sm-6 offset-sm-6">
                        <section class="bg-alt">
                            <div class="container">
                                <div class="row height-100">
                                    <div class="col-sm-10 offset-sm-1 mt-2">
                                        <form id="main-offer-form" action="https://formspree.io/f/xwkdvdnl" method="post">
                                            <h2 class="text-primary">Interested in this domain?</h2>
                                            <hr/>
                                            <input
                                                  type="hidden"
                                                  name="domain"
                                                  id="domain"
                                                  value="<?=$_SERVER['SERVER_NAME']?>"
                                                >
                                            <div class="form-group">
                                                <input
                                                  type="text"
                                                  name="name"
                                                  id="name"
                                                  class="form-control"
                                                  placeholder="Full name*"
                                                >
                                            </div>
                                            <div class="row">
                                              <div class="col">
                                                <div class="form-group">
                                                    <input
                                                      type="email"
                                                      name="email"
                                                      class="form-control"
                                                      placeholder="Email*"
                                                    >
                                                </div>
                                              </div>
                                              <div class="col">
                                                <div class="form-group">
                                                    <input
                                                      type="text"
                                                      name="phone"
                                                      class="form-control"
                                                      placeholder="Phone number*"
                                                    >
                                                </div>
                                              </div>
                                            </div>
                                            <div class="form-group">
                                                <input
                                                  type="number"
                                                  name="price"
                                                  class="form-control"
                                                  min="0"
                                                  placeholder="Offer (USD)?*">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="comments" class="form-control" placeholder="Message (optional)"></textarea>
                                            </div>

                                            <button type="submit" class="btn text-white btn-lg bg-primary btn-block">Make an offer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script>
          $( "#main-offer-form" ).validate({
            errorClass: 'form-control-feedback',
            errorElement: 'div',
            highlight: function(element) {
              $(element).parents(".form-group").addClass("has-danger");
            },
            unhighlight: function(element) {
              $(element).parents(".form-group").removeClass("has-danger");
            },
            rules: {
                name: 'required',
                email: {
                  required: true,
                  email: true
                },
                phone: {
                  required: true,
                  minlength:10,
                  maxlength:10
                },
                price: "required",
                comments: {
                  maxlength: 500
                }
              },
              messages: {
                name: 'Please enter your name.',
                email: {
                  required: 'Please enter your email.',
                  email: 'Please enter a valid email address.'
                },
                phone: {
                  required: 'Please enter your phone number.',
                  matches: 'Please enter a valide phone number.',
                  minlength: 'Phone number should be min 10 digits.',
                  maxlength: 'Phone number should be max 10 digits.'
                },
                price: {
                  required: 'Please enter your offered amount.'
                },
                comments: {
                  maxlength: 'Message length must be less than 500 character.'
                }
              }
          });
        </script>
    </body>
</html>