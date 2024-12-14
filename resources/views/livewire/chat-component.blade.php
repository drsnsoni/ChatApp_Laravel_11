<div class="container">
    <div class="mt-5">

      <div class="d-flex align-items-center mb-4 ml-2">
        <a class="mr-3" href="/dashboard" >
          <
        </a>
        <img src="https://www.transparentpng.com/thumb/user/gray-user-profile-icon-png-fP8Q1P.png" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;" alt="User Avatar">
        <h5 class="mb-0">{{ $user->name }}</h5>
      </div>


      <div class="card shadow-sm">
          <div class="card-body">
              <div class="d-flex flex-column" style="height: 500px;">
                  <!-- Chat Box -->
                  <div class="flex-grow-1 overflow-auto" id="chatBox">

                      @foreach ($messages as $message)

                      @if($message['sender'] != auth()->user()->name)


                             <!-- Receiver's message -->
                             <div class="d-flex mb-3 justify-content-start">
                              <div class="p-2 rounded-3 bg-light text-dark">
                                  <strong>Receiver:</strong>
                                  <p class="mb-0">{{ $message['message']}}</p>
                              </div>
                          </div>
                        @else
                            <!-- Sender's message -->
                            <div class="d-flex mb-3 justify-content-end">
                            <div class="p-2 rounded-3 bg-primary text-white">
                                <strong>You:</strong>
                                <p class="mb-0">{{ $message['message']}}</p>
                            </div>
                        </div>
                      @endif
                      @endforeach
                  <!-- Input Container -->
                  <div class="input-group mt-3">
                    <form wire:submit='sendMessage()'>
                      <input type="text" class="form-control" wire:model='message' placeholder="Type your message...">
                      <button class="btn btn-primary">
                          Send
                      </button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
