"use strict";
var KTLogin = function () {
    var t, e, o, n, i = function (t) {
        var i;
        KTUtil.addClass(e, "d-none"), KTUtil.addClass(o, "d-none"), KTUtil.addClass(n, "d-none"), "signin" === t && (i = e), "signup" === t && (i = o), "password-reset" === t && (i = n), KTUtil.removeClass(i, "d-none"), KTUtil.css(i, "animationDuration", "0.6s"), KTUtil.animateClass(i, "animate__animated animate__backInUp")
    };
    return {
        init: function () {
            var r, s, a, l;
            t = document.querySelector("#kt_login"), e = document.querySelector("#kt_login_signin_form"), o = document.querySelector("#kt_login_signup_form"), n = document.querySelector("#kt_login_password_reset_form"), s = t.querySelector("#kt_login_signin_form_submit_button"), a = t.querySelector("#kt_login_signin_form_singup_button"), l = t.querySelector("#kt_login_signin_form_password_reset_button"), r = FormValidation.formValidation(e, {
                    fields: {
                        username: {
                            validators: {
                                notEmpty: {
                                    message: "Username is required"
                                },
                                emailAddress: {
                                    message: "The value is not a valid email address"
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: "Password is required"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        submitButton: new FormValidation.plugins.SubmitButton,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row"
                        })
                    }
                }), s.addEventListener("click", (function (t) {
                    t.preventDefault(), r.validate().then((function (t) {
                        "Valid" == t ? (console.log("test!"), window.location.href = e.getAttribute("data-after-login-url")) : swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-light-primary"
                            }
                        }).then((function () {
                            KTUtil.scrollTop()
                        }))
                    }))
                })), l.addEventListener("click", (function (t) {
                    t.preventDefault(), i("password-reset")
                })), a.addEventListener("click", (function (t) {
                    t.preventDefault(), i("signup")
                })),
                function (e) {
                    var n, r = t.querySelector("#kt_login_signup_form_submit_button"),
                        s = t.querySelector("#kt_login_signup_form_cancel_button");
                    n = FormValidation.formValidation(o, {
                        fields: {
                            fullname: {
                                validators: {
                                    notEmpty: {
                                        message: "Username is required"
                                    }
                                }
                            },
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: "Email address is required"
                                    },
                                    emailAddress: {
                                        message: "The value is not a valid email address"
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: "The password is required"
                                    }
                                }
                            },
                            cpassword: {
                                validators: {
                                    notEmpty: {
                                        message: "The password confirmation is required"
                                    },
                                    identical: {
                                        compare: function () {
                                            return form.querySelector('[name="password"]').value
                                        },
                                        message: "The password and its confirm are not the same"
                                    }
                                }
                            },
                            agree: {
                                validators: {
                                    notEmpty: {
                                        message: "You must accept the terms and conditions"
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row"
                            })
                        }
                    }), r.addEventListener("click", (function (t) {
                        t.preventDefault(), n.validate().then((function (t) {
                            "Valid" == t ? swal.fire({
                                text: "All is cool! Now you submit this form",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-light-primary"
                                }
                            }).then((function () {
                                KTUtil.scrollTop()
                            })) : swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-light-primary"
                                }
                            }).then((function () {
                                KTUtil.scrollTop()
                            }))
                        }))
                    })), s.addEventListener("click", (function (t) {
                        t.preventDefault(), i("signin")
                    }))
                }(),
                function (e) {
                    var o, r = t.querySelector("#kt_login_password_reset_form_submit_button"),
                        s = t.querySelector("#kt_login_password_reset_form_cancel_button");
                    o = FormValidation.formValidation(n, {
                        fields: {
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: "Email address is required"
                                    },
                                    emailAddress: {
                                        message: "The value is not a valid email address"
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row"
                            })
                        }
                    }), r.addEventListener("click", (function (t) {
                        t.preventDefault(), o.validate().then((function (t) {
                            "Valid" == t ? swal.fire({
                                text: "Sent password reset. Please check your email",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-light-primary"
                                }
                            }).then((function () {
                                KTUtil.scrollTop()
                            })) : swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-light-primary"
                                }
                            }).then((function () {
                                KTUtil.scrollTop()
                            }))
                        }))
                    })), s.addEventListener("click", (function (t) {
                        t.preventDefault(), i("signin")
                    }))
                }()
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTLogin.init()
}));
