<div className="container">


                    <div className="modal fade" id="adddoctor" role="dialog">
                        <div className="po_sc_in">

                            <div className="modal-content">
                                <div className="modal-header">
                                    <h4 className="modal-title" style={{ fontSize: "20px", fontWeight: "600" }}>{heading}</h4>
                                    <button type="button" className="close popclose" style={{ color: "blue", fontSize: "30px" }} data-dismiss="modal">
                                        ×
                                    </button>

                                </div>
                                <div className="modal-body">
                                    <form onSubmit={submitDoctorPop}>

                                        <div className="mb-5 mt-3">
                                            <p className="text-center"><b>Profile Image</b></p>
                                            <input
                                                id="profileImageInput"
                                                type="file"
                                                onChange={handleImageUpload}
                                                style={{ display: 'none' }}

                                            />
                                            <div>
                                                <div className="profileContainer" onClick={handleProfileClick} style={{ backgroundColor: "#F4F4F4", width: "100px", height: "100px", borderRadius: "50%", cursor: "pointer", margin: "auto", display: "block" }}>
                                                    {isImageSelected ? (
                                                        <div>
                                                            <img src={image} alt="Profile" className="profileImage" style={{ width: "100px", height: "100px", borderRadius: "50%" }} />
                                                            <button onClick={handleRemoveProfile} style={{ marginTop: "8px", marginLeft: "25px", color: "red" }}>Remove</button>
                                                        </div>
                                                    ) : (
                                                        <div>
                                                            <img src={state.image === "" ? Doctor : state.image} alt="Profile" className="profileImage" style={{ width: "100px", height: "100px", borderRadius: "50%" }} />

                                                        </div>
                                                    )}
                                                </div>
                                            </div>
                                        </div>
                                        <div className="row" style={{ paddingLeft: "50px", paddingRight: "50px" }}>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Name:</span>
                                                </label>
                                                <input name="first_name" type="text" className="form-control"
                                                    placeholder=" Name"
                                                    minLength={1} maxLength={100}
                                                    value={state.first_name}
                                                    onChange={(e) => {
                                                        var sanitizedValue = e.target.value.replace(/[^A-Za-z\s.]/g, '');
                                                        if (sanitizedValue.length > 100) {
                                                            sanitizedValue = sanitizedValue.slice(0, 100);
                                                        }
                                                        const regex = /(.)\1{5,}/g;
                                                        sanitizedValue = sanitizedValue.replace(regex, '');
                                                        dispatch({ type: 'set_value', value: sanitizedValue, key: 'first_name' });
                                                    }}
                                                    required />
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Surname:</span>
                                                </label>
                                                <input name="surname" type="text" className="form-control"
                                                    placeholder="Surname"
                                                    minLength={1} maxLength={100}
                                                    value={state.surname}
                                                    onChange={(e) => {
                                                        var sanitizedValue = e.target.value.replace(/[^A-Za-z\s-,/.()'"]/g, '');
                                                        if (sanitizedValue.length > 100) {
                                                            sanitizedValue = sanitizedValue.slice(0, 100);
                                                        }
                                                        const regex = /(.)\1{5,}/g;
                                                        sanitizedValue = sanitizedValue.replace(regex, '');
                                                        dispatch({ type: 'set_value', value: sanitizedValue, key: 'surname' });
                                                    }}
                                                    required />
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Department:</span>
                                                </label>

                                                {(doctordepidList != null) ?
                                                    <select
                                                        className="form-select"
                                                        id="sel10"
                                                        style={{ fontSize: 14, height: 44, width: "100%" }}
                                                        required
                                                        ref={doctordRef}
                                                        value={state.department_id}
                                                        onChange={(e) => { dispatch({ type: 'set_value', value: e.target.value, key: 'department_id' }); }}
                                                    >
                                                        <option>Select Department.............</option>
                                                        {doctordepidList.map((list, index) =>
                                                            <option className="taboption" value={list['id']}>{list['title']}</option>
                                                        )}

                                                    </select>
                                                    : null}

                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Phone. No</span>
                                                </label>
                                                <input name="phone" type="text" className="form-control"
                                                    placeholder="Phone. No"
                                                    minLength={10} maxLength={10}
                                                    value={state.phone}
                                                    onChange={(e) => {
                                                        var sanitizedValue = e.target.value.replace(/[^0-9]/g, '');
                                                        dispatch({ type: 'set_value', value: sanitizedValue, key: 'phone' });
                                                    }}
                                                    required />
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Qualification</span>
                                                </label>
                                                <input name="qualification" type="text" className="form-control"
                                                    placeholder="Qualification"
                                                    value={state.qualification}
                                                    onChange={(e) => {
                                                        var sanitizedValue = e.target.value.replace(/[^A-Za-z\s-,/.()'"]/g, '');
                                                        if (sanitizedValue.length > 150) {
                                                            sanitizedValue = sanitizedValue.slice(0, 150);
                                                        }
                                                        const regex = /(.)\1{5,}/g;
                                                        sanitizedValue = sanitizedValue.replace(regex, '');
                                                        dispatch({ type: 'set_value', value: sanitizedValue, key: 'qualification' });
                                                    }}
                                                    required />
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Email</span>
                                                </label>
                                                <input type="email" name="email" required
                                                    className="form-control "
                                                    // pattern="[a-zA-Z0-9.]{5,}@[a-z]+\.[a-z]{2,3}"
                                                    value={state.email}
                                                    onChange={(e) => { dispatch({ type: 'set_value', value: e.target.value, key: 'email' }); }}

                                                    placeholder="Email" />
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Address</span>
                                                </label>
                                                <input name="address" type="address" className="form-control"
                                                    placeholder="Address"
                                                    value={state.address}
                                                    onChange={(e) => { dispatch({ type: 'set_value', value: e.target.value, key: 'address' }); }}
                                                    required />
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Age</span>
                                                </label>
                                                <input name="age" type="text" className="form-control"
                                                    placeholder="Age"
                                                    minLength={1} maxLength={3}
                                                    value={state.age}
                                                    onChange={(e) => {
                                                        var sanitizedValue = e.target.value.replace(/[^0-9]/g, '');
                                                        dispatch({ type: 'set_value', value: sanitizedValue, key: 'age' });
                                                    }}
                                                    required />
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">D.O.B</span>
                                                </label>
                                                <input name="date" type="date" className="form-control"
                                                    placeholder="Date"
                                                    value={state.dob}
                                                    max={currentDate}
                                                    onChange={(e) => { dispatch({ type: 'set_value', value: e.target.value, key: 'dob' }); }}
                                                    required />
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mt-3">
                                                <div className="form-group mb-5">
                                                    <label className="form-label">
                                                        <span className="required"></span>Gender
                                                    </label>
                                                    <br />
                                                    <div className="d-flex align-items-center gendergrid">

                                                        <div className="form-check me-5">
                                                            <label className="container-radio" htmlFor="male">  Male
                                                                <input type="radio" id="male" name="gender"
                                                                    value={state.gender}
                                                                    required
                                                                    checked={state.gender === 'Male'}
                                                                    onChange={(e) => { dispatch({ type: 'set_value', value: 'Male', key: 'gender' }); }}
                                                                />
                                                                <span className="checkmark"></span>
                                                            </label>
                                                        </div>

                                                        <div className="form-check me-10 mart">
                                                            <label className="container-radio" htmlFor="female">       Female
                                                                <input type="radio" id="female" name="gender"
                                                                    value={state.gender}
                                                                    checked={state.gender === 'Female'}
                                                                    onChange={(e) => { dispatch({ type: 'set_value', value: 'Female', key: 'gender' }); }}
                                                                />
                                                                <span className="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="col-md-6 mb-sm-7 mb-4">
                                                <label className="form-label">
                                                    <span className="required">Aadhar Number</span>
                                                </label>
                                                <input name="Aadhar Number" type="text" className="form-control"
                                                    placeholder="Aadhar Number"
                                                    minLength={12} maxLength={14}
                                                    value={state.aadhar_number}
                                                    onChange={(e) => {
                                                        var sanitizedValue = e.target.value.replace(/[^0-9]/g, '');
                                                        sanitizedValue = sanitizedValue.replace(/(\d{4})/g, '$1 ').trim();
                                                        dispatch({ type: 'set_value', value: sanitizedValue, key: 'aadhar_number' });
                                                    }} required />
                                            </div>
                                            {editmode && (<>
                                                <div className="col-md-6 mb-sm-7 mb-4">
                                                    <label className="form-label">
                                                        <span className="required">Password</span>
                                                    </label>
                                                    <input name="password1" type="password" className="form-control"
                                                        placeholder="Password"
                                                        minLength={6} maxLength={50}
                                                        value={state.password}
                                                        onChange={(e) => { dispatch({ type: 'set_value', value: e.target.value, key: 'password' }); }}
                                                        required />
                                                </div>

                                                <div className="col-md-6 mb-sm-7 mb-4">
                                                    <label className="form-label">
                                                        <span className="required">Confirm Password</span>
                                                    </label>
                                                    <input name="confirm_password" type="password" className="form-control"
                                                        placeholder="Confirm Password"
                                                        minLength={6} maxLength={50}
                                                        value={state.confirm_password}
                                                        onChange={(e) => { dispatch({ type: 'set_value', value: e.target.value, key: 'confirm_password' }); }}
                                                        required />
                                                </div>
                                            </>
                                            )}
                                        </div>
                                        <button type="submit" className="btn btn-primary " style={{ width: "150px", margin: "auto", display: "block" }}>{button}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>