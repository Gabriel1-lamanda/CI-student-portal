<?= $this->extend('default_view') ?>;
<?= $this->section('content') ?>
<?php $session = \Config\Services::session(); ?>
<form action="index.html" id="paymentForm">
    <!-- <div class="form-group"> -->
    <!-- <label for="first-name">First Name</label> -->
    <input type="hidden" id="first-name" value="<?= session('firstname') ?>" />
    <input type="hidden" id="email-address" value="<?= session('email') ?>" />
    <!-- </div> -->a
    <div class="form-group">
        <!-- <label for="last-name">Last Name</label> -->
        <input type="hidden" id="last-name" value="<?= session('lastname') ?>" />
    </div>


    <div style="width:90%; margin-inline: auto; margin-top: 1rem;">
        <div class="card">
            <h5 class="card-header">Select Payment</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-borderless">
                    <!-- <thead>
                    <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead> -->
                    <tbody>

                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Tution Fee</td>
                            <td>
                                <input class="form-control sume" type="number" value="520000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory feess</strong></td>
                            <td>Field work fees</td>
                            <td>
                                <input class="form-control sume" type="number" value="50000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>SIWES Fee</td>
                            <td>
                                <input class="form-control sume" type="number" value="20000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Maintainance fee</td>
                            <td>
                                <input class="form-control sume" type="number" value="20000" id="html5-number-input" />
                            </td>
                            <td><button onclick="payWithPaystack()" type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Health Care</td>
                            <td>
                                <input class="form-control sume" type="number" value="30000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Health Care</td>
                            <td>
                                <input class="form-control sume" type="number" value="30000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Library Development</td>
                            <td>
                                <input class="form-control sume" type="number" value="30000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Vocational Materials</td>
                            <td>
                                <input class="form-control sume" type="number" value="20000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Sports Development</td>
                            <td>
                                <input class="form-control sume" type="number" value="20000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Professional ICT</td>
                            <td>
                                <input class="form-control sume" type="number" value="60000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Development Fee</td>
                            <td>
                                <input class="form-control sume" type="number" value="60000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fees</strong></td>
                            <td>Utility Fee</td>
                            <td>
                                <input class="form-control sume" type="number" value="30000" id="html5-number-input" />
                            </td>
                            <td><button type="button" class="btn btn-outline-secondary">Pay</button></td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
        <div style="margin-inline: auto; margin-bottom: 3rem; height: 5rem; border-radius: 10px; padding-inline: 3rem; color: white; margin-top: 1rem; display: flex; justify-content: space-between; align-items: center; background:grey">
            <!-- <p><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Undergraduate Obligatory fjitgningrgrees</strong></p> -->
            <span>Total Fees: </span>

            <input style="width: 300px;" class="form-control totalss" type="number" value="" id="totalss" disabled />
            <input type="hidden" style="width: 300px;" class="form-control" type="number" value="" id="amount" disabled />

            <button type="submit" class="btn btn-outline-secondary">Pay</button>

        </div>
    </div>
</form>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
    let sum = 0;
    let values = document.querySelectorAll('.sume');
    values.forEach((valueself) => {
        sum += Number(valueself.value)
    });
    document.querySelector('.totalss').value = sum
</script>

<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    function payWithPaystack(e) {
        e.preventDefault();

        let handler = PaystackPop.setup({
            key: 'pk_test_0cbfb947f70926d1150524d8643d46513227fdcd', // Replace with your public key
            email: document.getElementById("email-address").value,
            amount: sum,
            ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            // label: "Optional string that replaces customer email"
            onClose: function() {
                // alert('Window closed.');
            },
            callback: function(response) {
                let message = 'Payment complete! Reference: ' + response.reference;
                alert(message);
            }
        });

        handler.openIframe();
    }
</script>




<?= $this->endSection() ?>