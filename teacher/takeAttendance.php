<?php echo "take";?>
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