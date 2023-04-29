 <h3 class="feedback-report-header">Feedback and Report</h3>
            <p class="feedback-report-description">We value your feedback! Please let us know if you have any suggestions or if you encounter any issues.</p>
            <div class="feedback-report-buttons mt-3">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#feedbackModal"><i class="ri-thumb-up-fill"></i>
                    Give Feedback
                    </button>
                    <button type="button" class="btn btn-danger" id="reportBtn" ><i class="ri-flag-fill"></i> Report
                    </button>
            </div>

                 <!-- Modal -->
            <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="feedbackModalLabel">Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form id="feedbackForm">
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                        <label for="feedbackType">Feedback Type</label>
                        <select class="form-control" id="feedbackType" name="feedbackType" required>
                            <option value="" disabled selected>Select feedback type</option>
                            <option value="generalFeedback">General Feedback</option>
                            <option value="complaint">Complaint</option>
                            <option value="suggestion">Suggestion</option>
                            <option value="praise">Praise</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="feedback">Feedback</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="alert alert-success mt-3 d-none" role="alert" id="feedbackSuccess">
                        Thank you for your feedback! The modal will close automatically in a few seconds.
                    </div>
                    </div>
                </div>
                </div>
            </div>