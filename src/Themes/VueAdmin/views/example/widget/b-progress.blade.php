@example

   <b-progress :value="25" variant="success" striped animated show-value class="mb-2"></b-progress>
    <b-progress :value="50" variant="info" striped class="mb-2"></b-progress>
    <b-progress :value="75" variant="warning" class="mb-2"></b-progress>
    <b-progress :value="100" variant="danger" animated class="mb-3"></b-progress>
    <b-progress :value="50" variant="primary" height="2px" class="mb-2"></b-progress>
    <b-progress class="mb-3">
        <b-progress-bar :value="20" variant="secondary"></b-progress-bar>
        <b-progress-bar :value="20" variant="dark" class="mb-2"></b-progress-bar>
    </b-progress>

@endexample