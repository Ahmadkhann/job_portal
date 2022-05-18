<?php 
/**
 * Template Name: Future Jobs
 * 
 * 
 */

 get_header();
?>

<!-- Breadcromb Area Start -->
<section class="jobguru-submit-resume-area section_70">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form method="POST" action="#">
						<div class="submit-resume-box">
							<div class="resume-box">
								<h3>Personal Information</h3>
								<div class="single-resume-feild feild-flex-2">
									<div class="single-input">
										<label for="name">Your Name:</label>
										<input type="text" placeholder="Your Full Name" name="names" id="name"> 
                                    </div>
									<div class="single-input">
										<label for="email">Email:</label>
										<input type="email" placeholder="Email" name="email" id="email"> 
                                    </div>
								</div>
								<div class="single-resume-feild feild-flex-2">
									<div class="single-input">
										<label for="Phone">Phone:</label>
										<input type="tel" placeholder="Phone Number" name="phone" id="Phone"> 
                                    </div>
									<div class="single-input">
										<label for="experience">Total Experience:</label>
										<select id="experience" name="experience">
											<option selected>select Experience</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
										</select>
									</div>
									<!-- <div class="single-input">
                                 <label for="Email">Tota:</label>
                                 <input type="email" placeholder="Your Email Address" id="Email">
                              </div> --></div>
								<div class="single-resume-feild feild-flex-2">
									<div class="single-input">
										<label for="cnic">CNIC:</label>
										<input type="text" name="cnic" placeholder="12345-6789253-5" id="cnic" /> </div>
									<div class="single-input">
										<label for="gender">Gender:</label>
										<select name="gender" id="gender">
											<option selected>Male</option>
											<option>Female</option>
											<option>both</option>
										</select>
									</div>
								</div>
								<div class="single-resume-feild feild-flex-2">
									<div class="single-input">
										<label for="date-birth">Date of Bith:</label>
										<input type="date" name="date_of_birth" placeholder="dd/mm/yy/" id="date_of_birth" /> 
                                    </div>
									<div class="single-input">
										<label for="gender">Preffered City:</label>
										<select name="city" id="city">
											<option selected>Lahore</option>
											<option>Sailkot</option>
											<option>Gujranwala</option>
										</select>
									</div>
								</div>
								<div class="single-resume-feild">
									<div class="single-input">
										<label for="hometown">Home Town:</label>
										<input type="text" name="home-town" id="home-town" placeholder="home town"> </div>
									<div class="single-input">
										<label for="Bio">Introduce Yourself:</label>
										<textarea id="Bio" name="bio" placeholder="Write Your Bio Here..."></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label>Select Job Type</label>
									<div class="jobTypeList">
										<div class="checkbox__wrapper">
											<input class="inp-cbx" id="cbx" type="radio" name="jobType" value="Teaching">
											<label class="cbx cbx__main_label" for="cbx"> <span style="width: 25px;">
                                       <svg width="12px" height="10px" viewbox="0 0 12 10">
                                          <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                       </svg>
                                    </span> <span>Teaching</span> </label>
										</div>
										<div class="checkbox__wrapper">
											<input class="inp-cbx" id="cbx-1" type="radio" name="jobType" value="Non_Teaching">
											<label class="cbx cbx__main_label" for="cbx-1"> <span style="width: 24px;">
                                       <svg width="12px" height="10px" viewbox="0 0 12 10">
                                          <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                       </svg>
                                    </span> <span>Non-Teaching</span> </label>
										</div>
										<div class="checkbox__wrapper">
											<input class="inp-cbx" id="cbx-2" type="radio" name="jobType" value="Support_Staff">
											<label class="cbx cbx__main_label" for="cbx-2"> <span>
                                       <svg width="12px" height="10px" viewbox="0 0 12 10">
                                          <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                       </svg>
                                    </span> <span>Support Staff</span> </label>
										</div>
									</div>
								</div>
							</div>
							<div class="box Teaching">
								<div class="row">
									<div class="col-lg-3">
										<div>
											<div class="chooseshift">
												<label>Choose Shift</label>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-1" type="radio" name="shift" value="Morning">
													<label class="cbx cbx__main_label" for="shift-id-1"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Morning</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-2" type="radio" name="shift" value="Evening">
													<label class="cbx cbx__main_label" for="shift-id-2"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Evening</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-3" type="radio" name="shift" value="Both">
													<label class="cbx cbx__main_label" for="shift-id-3"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Both</span> </label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="single-input">
											<label for="post">Choose Post</label>
											<select id="post" name="choose_post">
												<option value="Principal">Principal</option>
												<option value="Vice Principal">Vice Principal</option>
												<option value="Professor">Professor</option>
												<option value="Assistant Professor">Assistant Professor</option>
												<option value="Lecturer">Lecturer</option>
												<option value="Teacher">Teacher</option>
												<option value="Second Teacher">Second Teacher</option>
												<option value="Sports Teacher">Sports Teacher</option>
												<option value="Fine Arts Teacher">Fine Arts Teacher</option>
												<option value="Junior School Teacher">Junior School Teacher</option>
											</select>
										</div>
									</div>
									<div class="col-lg-5">
										<div>
											<label>Applying For</label>
											<div class="checkbox__wrapper">
												<input class="inp-cbx" id="cbx-7" type="checkbox" name ="applying_for" value="Junior School Teacher( Playgroup to Class 5)">
												<label class="cbx cbx__main_label" for="cbx-7"> <span style="width: 19px;">
                                 <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                 </svg>
                              </span> <span>Junior School Teacher( Playgroup to Class 5)</span> </label>
											</div>
											<div class="checkbox__wrapper">
												<input class="inp-cbx" id="cbx-8" type="checkbox" name ="applying_for" value="Middle School Teacher(From class 6 to class 8 )">
												<label class="cbx cbx__main_label" for="cbx-8"> <span style="width: 19px;">
                                 <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                 </svg>
                              </span> <span>Middle School Teacher(From class 6 to class 8 )</span> </label>
											</div>
											<div class="checkbox__wrapper">
												<input class="inp-cbx high-school-check" id="cbx-9" type="checkbox" name ="applying_for" value="High School Teacher( 9th and 10 th)">
												<label class="cbx cbx__main_label" for="cbx-9"> <span style="width: 19px;">
                                 <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                 </svg>
                              </span> <span>High School Teacher( 9th and 10 th)</span> </label>
											</div>
											<div class="high-school-subjects mt-2 mb-2 me-2">
												<ul class="subject-list">
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-1" type="checkbox" name="inner_data" value="Arabic">
															<label class="cbx cbx__main_label" for="high-school-subjects-1"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Arabic</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-2" type="checkbox" name="inner_data" value="Biology">
															<label class="cbx cbx__main_label" for="high-school-subjects-2"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Biology</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-3" type="checkbox" name="inner_data" value="Chemistry">
															<label class="cbx cbx__main_label" for="high-school-subjects-3"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Chemistry</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-4" type="checkbox" name="inner_data" value="Civics">
															<label class="cbx cbx__main_label" for="high-school-subjects-4"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Civics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-5" type="checkbox" name="inner_data" value="Computer Science">
															<label class="cbx cbx__main_label" for="high-school-subjects-5"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Computer Science</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-6" type="checkbox" name="inner_data" value="Economics">
															<label class="cbx cbx__main_label" for="high-school-subjects-6"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Economics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-7" type="checkbox" name="inner_data" value="Education">
															<label class="cbx cbx__main_label" for="high-school-subjects-7"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Education</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-8" type="checkbox" name="inner_data" value="English">
															<label class="cbx cbx__main_label" for="high-school-subjects-8"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>English</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-9" type="checkbox" name="inner_data" value="G.Science">
															<label class="cbx cbx__main_label" for="high-school-subjects-9"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>G.Science</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-10" type="checkbox" name="inner_data" value="History">
															<label class="cbx cbx__main_label" for="high-school-subjects-10"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>History</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-11" type="checkbox" name="inner_data" value="Information Technology">
															<label class="cbx cbx__main_label" for="high-school-subjects-11"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Information Technology</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-12" type="checkbox" name="inner_data" value="Islamiat">
															<label class="cbx cbx__main_label" for="high-school-subjects-12"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Islamiat</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-13" type="checkbox" name="inner_data" value="Mathematics">
															<label class="cbx cbx__main_label" for="high-school-subjects-13"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Mathematics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-14" type="checkbox" name="inner_data" value="Pak. Studies">
															<label class="cbx cbx__main_label" for="high-school-subjects-14"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Pak. Studies</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-15" type="checkbox" name="inner_data" value="Physics">
															<label class="cbx cbx__main_label" for="high-school-subjects-15"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Physics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-16" type="checkbox" name="inner_data" value="Political Sciences">
															<label class="cbx cbx__main_label" for="high-school-subjects-16"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Political Sciences</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-17" type="checkbox" name="inner_data" value="Punjabi">
															<label class="cbx cbx__main_label" for="high-school-subjects-17"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Punjabi</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-18" type="checkbox" name="inner_data" value="Social Studies">
															<label class="cbx cbx__main_label" for="high-school-subjects-18"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Social Studies</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-19" type="checkbox" name="inner_data" value="Statistics">
															<label class="cbx cbx__main_label" for="high-school-subjects-19"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Statistics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-20" type="checkbox" name="inner_data" value="Urdu">
															<label class="cbx cbx__main_label" for="high-school-subjects-20"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Urdu</span> </label>
														</div>
													</li>
												</ul>
											</div>
											<div class="checkbox__wrapper">
												<input class="inp-cbx college-subjects-check" id="cbx-10" type="checkbox" name ="applying_for" value="College Level(1st Year and 2nd Year)">
												<label class="cbx cbx__main_label" for="cbx-10"> <span style="width: 19px;">
                                 <svg width="12px" height="10px" viewbox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                 </svg>
                              </span> <span>College Level(1st Year and 2nd Year)</span> </label>
											</div>
											<div class="college-subjects mt-2 mb-2 me-2">
												<ul class="subject-list">
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-21" type="checkbox" name="more_radio" value="Arabic">
															<label class="cbx cbx__main_label" for="high-school-subjects-21"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Arabic</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-22" type="checkbox" name="more_radio" value="Biology">
															<label class="cbx cbx__main_label" for="high-school-subjects-22"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Biology</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-23" type="checkbox" name="more_radio" value="Chemistry">
															<label class="cbx cbx__main_label" for="high-school-subjects-23"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Chemistry</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-24" type="checkbox" name="more_radio" value="Civics">
															<label class="cbx cbx__main_label" for="high-school-subjects-24"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Civics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-25" type="checkbox" name="more_radio" value="Computer Science">
															<label class="cbx cbx__main_label" for="high-school-subjects-25"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Computer Science</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-26" type="checkbox" name="more_radio" value="Economics">
															<label class="cbx cbx__main_label" for="high-school-subjects-26"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Economics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-27" type="checkbox" name="more_radio" value="Education">
															<label class="cbx cbx__main_label" for="high-school-subjects-27"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Education</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-28" type="checkbox" name="more_radio" value="English">
															<label class="cbx cbx__main_label" for="high-school-subjects-28"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>English</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-29" type="checkbox" name="more_radio" value="G.Science">
															<label class="cbx cbx__main_label" for="high-school-subjects-29"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>G.Science</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-30" type="checkbox" name="more_radio" value="History">
															<label class="cbx cbx__main_label" for="high-school-subjects-30"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>History</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-31" type="checkbox" name="more_radio" value="Information Technology">
															<label class="cbx cbx__main_label" for="high-school-subjects-31"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Information Technology</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-32" type="checkbox" name="more_radio" value="Islamiat">
															<label class="cbx cbx__main_label" for="high-school-subjects-32"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Islamiat</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-33" type="checkbox" name="more_radio" value="Mathematics">
															<label class="cbx cbx__main_label" for="high-school-subjects-33"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Mathematics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-34" type="checkbox" name="more_radio" value="Pak. Studies">
															<label class="cbx cbx__main_label" for="high-school-subjects-34"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Pak. Studies</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-35" type="checkbox" name="more_radio" value="Physics">
															<label class="cbx cbx__main_label" for="high-school-subjects-35"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Physics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-36" type="checkbox" name="more_radio" value="Political Sciences">
															<label class="cbx cbx__main_label" for="high-school-subjects-36"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Political Sciences</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-37" type="checkbox" name="more_radio" value="Punjabi">
															<label class="cbx cbx__main_label" for="high-school-subjects-37"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Punjabi</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-38" type="checkbox" name="more_radio" value="Social Studies">
															<label class="cbx cbx__main_label" for="high-school-subjects-38"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Social Studies</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-39" type="checkbox" name="more_radio" value="Statistics">
															<label class="cbx cbx__main_label" for="high-school-subjects-39"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Statistics</span> </label>
														</div>
													</li>
													<li>
														<div class="checkbox__wrapper">
															<input class="inp-cbx " id="high-school-subjects-40" type="checkbox" name="more_radio" value="Urdu">
															<label class="cbx cbx__main_label" for="high-school-subjects-40"> <span style="width: 19px;">
                                          <svg width="12px" height="10px" viewbox="0 0 12 10">
                                             <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                          </svg>
                                       </span> <span>Urdu</span> </label>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="box Non_Teaching">
								<div class="row">
									<div class="col-lg-3">
										<div>
											<div class="chooseshift">
												<label>Choose Shift</label>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-4" type="radio" name="non_teaching_shift" value="Morning">
													<label class="cbx cbx__main_label" for="shift-id-4"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Morning</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-5" type="radio" name="non_teaching_shift" value="Evening">
													<label class="cbx cbx__main_label" for="shift-id-5"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Evening</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-6" type="radio" name="non_teaching_shift" value="Both">
													<label class="cbx cbx__main_label" for="shift-id-6"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Both</span> </label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="single-input">
											<label for="Department">Choose Department</label>
											<select id="Department" name="select_post">
												<option value="Admin">Admin</option>
												<option value="Publications">Publications</option>
												<option value="HR">HR</option>
												<option value="Sports">Sports</option>
												<option value="IT">IT</option>
												<option value="Coordination">Coordination</option>
												<option value="Research and Development">Research and Development</option>
												<option value="Entry Test">Entry Test</option>
												<option value="Finance">Finance</option>
												<option value="Legal">Legal</option>
												<option value="CDD(Marketing)">CDD(Marketing)</option>
												<option value="Event Management/Media">Event Management/Media</option>
											</select>
										</div>
									</div>
									<div class="col-lg-5"> </div>
								</div>
							</div>
							<div class="box Support_Staff">
								<div class="row">
									<div class="col-lg-3">
										<div>
											<div class="chooseshift">
												<label>Choose Shift</label>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-7" type="radio" name="support_shift" value="Morning">
													<label class="cbx cbx__main_label" for="shift-id-7"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Morning</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-8" type="radio" name="support_shift" value="Evening">
													<label class="cbx cbx__main_label" for="shift-id-8"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Evening</span> </label>
												</div>
												<div class="checkbox__wrapper">
													<input class="inp-cbx" id="shift-id-9" type="radio" name="support_shift" value="Both" checked>
													<label class="cbx cbx__main_label" for="shift-id-9"> <span style="width: 19px;">
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                       <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                 </span> <span>Both</span> </label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="single-input">
											<label for="post2">Select Post</label>
											<select id="post2" name="select_vac">
												<option value="Aaya">Aaya</option>
												<option value="Attendant">Attendant</option>
												<option value="Drivers">Drivers</option>
												<option value="Electrician">Electrician</option>
												<option value="Loader">Loader</option>
												<option value="Plumber">Plumber</option>
												<option value="Rider">Rider</option>
												<option value="SecurityGuard">SecurityGuard</option>
												<option value="Sweeper">Sweeper</option>
												<option value="Welder">Welder</option>
												<option value="default">default</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-resume">
								<input type="submit" name="submit" value="Send Resume" />
							</div>
                           
					</form>
                  
                    <?php
                        if(isset($_POST['submit'])) {
                        $name = $_REQUEST['names'];
                        $email = $_REQUEST['email'];
                        $phone = $_REQUEST['phone'];
                        $total_exp = $_REQUEST['experience'];
                        $cnic = $_REQUEST['cnic'];
                        $gender = $_REQUEST['gender'];
                        $date_of_birth = $_REQUEST['date_of_birth'];
                        $city = $_REQUEST['city'];
                        $home_town = $_REQUEST['home-town'];
                        $bio = $_REQUEST['bio'];
                        // echo "<pre>";  print_r($_POST);

						$job_type = $_REQUEST['jobType'];
						$teaching_shift = $_REQUEST['shift'];
						$choose_post = $_REQUEST['choose_post'];
						$apply_for = $_REQUEST['applying_for'];

						// inner radio button
						$inner_radio_btn = $_REQUEST['inner_data'];
						$inner_more_radio_btn = $_REQUEST['more_radio'];
						
						//var_dump($_REQUEST['applying-for']);
						// print_r($choose_post);
						//exit('asdf');
						//print_r($job_type);

						// Non_Teaching
						$non_teaching_shift = $_REQUEST['non_teaching_shift'];
						$non_teaching_select_post = $_REQUEST['select_post'];

						// Support staff
						$support_staff_shift = $_REQUEST['support_shift'];
						$support_select_vac = $_REQUEST['select_vac']; 


						$future_job_data = array(
							'post_type' => 'future_job_candidate',
							'post_status' => 'pending',
							'post_title' => $name,
							'post_content' => $bio,
	
	
						);
	
						// To insert data into post
						$post = wp_insert_post($future_job_data);
						// echo "<pre>"; print_r($post);
						// exit('asdf');
	
						// to getting the fields from ACF
						$email_value = 'field_6281dd3ca3693';
						$phone_value = 'field_6281dd51a3694';
						$total_exp_value = 'field_6281dd6ba3695';
						$cnic_value = 'field_6281ddd6a3696';
						$gender_value = 'field_6281ddf2a3697';
						$date_of_birth_value = 'field_6281dfb25e921';
						$city_value = 'field_6281dfd25e922';
						$home_town_value = 'field_6281dfff5e923';
	
						$checkbox_data = 'field_6282290f2595a';
						$shift_value = 'field_62822b7cd3d98';
						$choose_post_value = 'field_62822bfa11cf2';
						$apply_for_value = 'field_628245f5730ad';
	
						// inner radio btn 
						$inner_btn_value = 'field_62824d0421922';
						$inner_more_radio_value = 'field_6283250c4e940';
	
						// Non-Teaching
						$non_teaching_shift_value = 'field_628240799a357'; 
						$non_teaching_select_post_value = 'field_6282319f326d6';
						
						// support staff
						$support_shift_value = 'field_628327fafa2a9';
						$support_select_vac_value = 'field_628241cb43fa8';

						
					   
						// Update Acf fields
						update_field($email_value, $email, $post);
						update_field($phone_value, $phone, $post);
						update_field($total_exp_value, $total_exp, $post);
						update_field($cnic_value, $cnic, $post);
						update_field($gender_value, $gender, $post);
						update_field($date_of_birth_value, $date_of_birth, $post);
						update_field($city_value, $city, $post);
						update_field($home_town_value, $home_town, $post);
	
						update_field($checkbox_data, $job_type, $post);
						update_field($shift_value, $teaching_shift, $post);
						update_field($choose_post_value, $choose_post, $post);
	
						update_field($apply_for_value, $apply_for, $post);
	
						// inner radio button
						update_field($inner_btn_value, $inner_radio_btn, $post);
						update_field($inner_more_radio_value, $inner_more_radio_btn, $post);
	
	
						// Non-Teaching
						update_field($non_teaching_shift_value, $non_teaching_shift, $post);
						update_field($non_teaching_select_post_value, $non_teaching_select_post, $post);
	
						// support staff
						update_field($support_shift_value, $support_staff_shift, $post);
						update_field($support_select_vac_value, $support_select_vac, $post);

                    }
                    
       ?>
						</div>
				</div>
			</div>
	</section>

	<?php get_footer(); ?>

		<!-- Footer Area End -->
		<script type="text/javascript">
		$(".high-school-check").click(function() {
			if($(this).is(":checked")) {
				$(".high-school-subjects").slideDown();
			} else {
				$(".high-school-subjects").slideUp();
			}
		});
		</script>
		<script type="text/javascript">
		$(".college-subjects-check").click(function() {
			if($(this).is(":checked")) {
				$(".college-subjects").slideDown();
			} else {
				$(".college-subjects").slideUp();
			}
		});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('.jobTypeList input[type="radio"]').click(function() {
				var inputValue = $(this).attr("value");
				var targetBox = $("." + inputValue);
				$(".box").not(targetBox).hide();
				$(targetBox).show();
			});
		});
		</script>