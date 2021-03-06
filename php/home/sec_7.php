<?php
require_once 'config.php';

$sql = "SELECT * FROM blogs LIMIT 3";
$res = mysqli_query($conn, $sql);

?>

<style>
	img.img-fluid {
		width: 100%;
		height: 230px;
		object-fit: cover;
	}
</style>

<div class="container-fluid bgPrimaryColor text-white p-3">

    <div class="py-5 px-md-5">
        <h3 class="text-center">Lastest News</h3>
        <hr>

        <div class="row justify-content-around m-2">

			<?php while ($food = mysqli_fetch_array($res)) :?>

                <!-- Card -->
                <div class="card weather-card col-md-3 my-3" data-aos="flip-right">

                    <!-- Card content -->
                    <div class="card-body pb-3">

                        <div class="img">
                            <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 img-hover-zoom">
                                <img src="<?php echo 'img/blog/' . $food['photo_url']; ?>" class="img-fluid"
                                     alt="">
                                <a href="/showblog?id=<?php echo $food['id'] ?>&name=1">
                                    <div class="mask"></div>
                                </a>
                            </div>
                        </div>
                        <!--Excerpt-->
                        <a href="" class="pink-text">
                            <h6 class="mb-3 mt-4">
                                <i class="fa fa-bolt"></i>
                                <strong><?php echo $food['slug']; ?></strong>
                            </h6>
                        </a>
                        <h4 class="mb-3 font-weight-bold dark-grey-text">
                            <strong><?php echo $food['title'] ?></strong>
                        </h4>

                        <div>

                            <div class="collapse" id="collapse_<?php echo $food['id'] ?>">

                                <p class="grey-text"><?php echo $food['body']; ?></p>

                            </div>

                            <hr class="">

                            <a class="btn btn-info btn-rounded btn-md change-btn" href="/showblog?id=<?php echo $food['id'] ?>&name=1">Read more</a>

                        </div>

                    </div>

                </div>
                <!-- Card -->

            <?php endwhile; ?>

        </div>


	</div>

</div>
