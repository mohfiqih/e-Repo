<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <!-- Add Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png" />
     <title>Feedback | e-Repo</title>
     <style>
     body {
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          /* Center the page content horizontally and vertically */
     }

     .rating-container {
          display: grid;
          grid-template-rows: 1fr auto;
          gap: 10px;
          align-items: center;
          text-align: center;
     }

     .star-rating {
          display: flex;
          /* Mengubah elemen menjadi flex container */
          justify-content: center;
     }

     .star-rating input {
          display: none;
     }

     .star-rating label {
          font-size: 40px;
          color: #ccc;
          cursor: pointer;
          transition: color 0.2s;
     }

     .star-rating label:hover,
     .star-rating label:hover~label,
     .star-rating input:checked~label {
          color: gold;
     }

     /* Tambahkan gaya untuk rating display */
     .rating-text {
          font-size: 18px;
     }

     .container {
          width: 400px;
          height: auto;
     }
     </style>
</head>

<body>
     <div class="container">
          <div class="card">
               <div class="card-header text-white" style="background-color: #4747A1;">
                    Feedback Sistem
               </div>
               <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "update") : url(1, "save_rating")); ?>
               <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                    value="<?php echo $this->security->get_csrf_hash(); ?>">
               <div class="card-body">
                    <div class="rating-container">
                         <div class="">
                              <h5>Sistem e-Repo</h5>
                              <p>Berikan rating anda untuk sistem ini.😉👌</p>
                         </div>
                         <div class="info-text" hidden>
                              <input class="mb-3" type="hidden" style="color: grey;" />
                              <input type="hidden" name="nama_lengkap" value="<?php echo $user->user_namalengkap; ?>">
                              <input type="hidden" name="id_identitas" value="<?php echo $user->username_id; ?>"></p>
                              <input name="sebagai" value="<?php echo $user->user_level; ?>">
                              <input type="hidden" name="prodi" value="<?php echo $user->user_prodi; ?>"></p>
                         </div>
                         <div class="star-rating">
                              <input type="radio" name="bintang" id="star5" value="5">
                              <label for="star5"><i class="fas fa-star"></i></label>
                              <input type="radio" name="bintang" id="star4" value="4">
                              <label for="star4"><i class="fas fa-star"></i></label>
                              <input type="radio" name="bintang" id="star3" value="3">
                              <label for="star3"><i class="fas fa-star"></i></label>
                              <input type="radio" name="bintang" id="star2" value="2">
                              <label for="star2"><i class="fas fa-star"></i></label>
                              <input type="radio" name="bintang" id="star1" value="1">
                              <label for="star1"><i class="fas fa-star"></i></label>
                         </div>
                    </div>
                    <br />

                    <div class="form-floating mb-3">
                         <textarea style="height: 150px;" class="form-control" name="feedback"
                              placeholder="Feedback Anda.." rows="15" required></textarea>
                    </div>

                    <!-- Hidden input to store the rating value -->
                    <input type="hidden" name="rating" id="ratingValueInput" value="">

                    <button id="myButton" type="submit"
                         style="border-radius: 10px;height: 50px;background-color: #4747A1;"
                         class="btn btn-block text-white">Kirim Jawaban <span class="btn-label"></span></button>

               </div>
               </form>
          </div>
     </div>

     <!-- Add Bootstrap JS and jQuery -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script>
     const starRating = document.querySelector('.star-rating');
     const stars = starRating.querySelectorAll('input');
     const ratingText = document.querySelector('.rating-text');
     const ratingValueInput = document.getElementById('ratingValueInput');

     stars.forEach(star => {
          star.addEventListener('click', () => {
               const ratingValue = star.value;
               ratingText.textContent =
                    `Rating Sistem: ${ratingValue} star${ratingValue > 1 ? 's' : ''}`;

               // Set the rating value to the hidden input
               ratingValueInput.value = ratingValue;
          });
     });
     </script>
</body>

</html>