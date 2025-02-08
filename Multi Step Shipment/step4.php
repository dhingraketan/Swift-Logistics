<fieldset>
  <!-- For demo purpose -->
  <div class="row">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-6">Make a payment</h1>
    </div>
  </div>
  <!-- End -->
  <div class="row">
    <div class="col-lg-6 mx-auto">
      <div class="card">
        <div class="card-header">
          <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
            <!-- Credit card form tabs -->
            <ul
              role="tablist"
              class="nav bg-light nav-pills rounded nav-fill mb-3"
            >
              <li class="nav-item">
                <a
                  data-toggle="pill"
                  href="#credit-card"
                  class="nav-link active"
                >
                  <i class="fas fa-credit-card mr-2"></i> Credit Card
                </a>
              </li>
            </ul>
          </div>
          <!-- End -->
          <!-- Credit card form content -->
          <div class="tab-content" style="color: black" ;>
            <!-- credit card info-->
            <div id="credit-card" class="tab-pane fade show active pt-3">
              <div class="form-group">
                <label for="username">
                  <h6>Card Owner</h6>
                </label>
                <input
                  type="text"
                  name="username"
                  placeholder="Card Owner Name"
                  required
                  class="form-control"
                />
              </div>
              <div class="form-group">
                <label for="cardNumber">
                  <h6>Card number</h6>
                </label>
                <div class="input-group">
                  <input
                    type="text"
                    name="cardNumber"
                    placeholder="Valid card number"
                    class="form-control"
                    required
                  />
                  <div class="input-group-append">
                    <span class="input-group-text text-muted">
                      <i class="fab fa-cc-visa mx-1"></i>
                      <i class="fab fa-cc-mastercard mx-1"></i>
                      <i class="fab fa-cc-amex mx-1"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <label
                      ><span class="hidden-xs">
                        <h6>Expiration Date</h6>
                      </span></label
                    >
                    <div class="input-group">
                      <input
                        type="number"
                        placeholder="MM"
                        name=""
                        class="form-control"
                        required
                      />
                      <input
                        type="number"
                        placeholder="YY"
                        name=""
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group mb-4">
                    <label
                      data-toggle="tooltip"
                      title="Three digit CV code on the back of your card"
                    >
                      <h6>
                        CVV <i class="fa fa-question-circle d-inline"></i>
                      </h6>
                    </label>
                    <input type="text" required class="form-control" />
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <input
                  type="submit"
                  value="Confirm Payment"
                  name="submit"
                  id="submit_data"
                  class="subscribe btn btn-block btn-primary shadow-sm"
                />
                <input
                  type="button"
                  value="Previous"
                  id="submit_data"
                  name="previous"
                  class="previous btn btn-block btn-primary shadow-sm"
                />
              </div>
            </div>
            <!-- End -->
            <!-- End -->
          </div>
        </div>
      </div>
    </div>
  </div>
</fieldset>
