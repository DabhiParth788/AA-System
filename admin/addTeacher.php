<?php echo "add teacher";?>

<div class="card p-4 m-5">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="teacher_name" placeholder="Enter Name"
                                    name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email"
                                    name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="String" class="form-control" id="phone_number"
                                    placeholder="Enter Phone Number" name="phone_no" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter Password"
                                    name="password" required>
                            </div>

                            <div class="text-center">
                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                <input class="btn btn-primary btn-lg" type="submit" name="teacher_add" value="Submit" />
                            </div>
                        </form>
                    </div>
