<?php
                if(isset($detail) and $detail[3] != NULL){ ?>
                    <div class="card p-4 m-5">
                        <form action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="teacher_name" placeholder="Enter Name" 
                                name="name" 
                                required>
                            </div>
                            <div class="mb-3">
                                <label for="enrollment_number" class="form-label">Enrollment Number</label>
                                <input type="text" class="form-control" id="enrollment_number"
                                placeholder="Enter Enrollment Number"
                                name="enrollment_no" 
                                required>
                            </div>
                            <div class="d-flex gap-5">
                                <div class="mb-3">
                                    <label for="standard" class="form-label">class</label>
                                    <br>
                                    <input type="type" class="form-control" id="class" name="class" value="<?php echo $detail[3] ?>" 
                                    disabled/>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <br>
                                <div>
                                    <input type="radio" name="gender" value="male" id="male">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" value="female" id="female">
                                    <label for="female">Female</label>

                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email">
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="String" class="form-control" id="phone_number"
                                    placeholder="Enter Phone Number">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter Password">
                            </div>
                            <div class="text-center">
                                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                    <?php } ?>





                </div>