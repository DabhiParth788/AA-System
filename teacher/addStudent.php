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
                    <div class="card p-4 m-5">
                        <h1 class="text-center fs-1">Student Table</h1>
                        <hr>
                        <table class="table table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Sr.No.</th>
                                    <th scope="col">Enrollment No</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Present</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>210210116029</td>
                                    <td>Harshit Dodiya</td>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="activetableCheck01" checked>
                                            <label class="form-check-label" for="activetableCheck01"
                                                cursor="pointer"></label>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>210210116065</td>
                                    <td>Drashti Jani</td>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="activetableCheck01" checked>
                                            <label class="form-check-label" for="activetableCheck01"
                                                cursor="pointer"></label>
                                        </div>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <input class="btn btn-primary btn-lg mt-3" type="submit" name="submit_attendence" value="Submit" />
                        </div>
                    </div>




                </div>