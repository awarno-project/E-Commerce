


            <div class="password-change-popup border">
                <form>
                    <div class="mb-3 col-11 mx-auto">
                        <label for="exampleInputPassword1" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 col-11 mx-auto">
                      <label for="exampleInputPassword1" class="form-label">Verify Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary permission mx-3 my-2">Submit</button>
                  </form>

            </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="./js/index.js">
    </script>
    <script>
      const allStars = document.querySelectorAll('.star');
      
      allStars.forEach( (star, i) =>{
          star.onclick = function (){
            Let current_star_level = i + 1;

            allStars.forEach((star, j) => {
            console.log(j);

            //   if (current_star_level >= j+1) {
            //     star.innerHTML = '&#9733;';
            //   }
              // else{
              //   star.innerHTML = '&#9734;';
              // }

            })
          }
      })
    </script>


</body>
</html>