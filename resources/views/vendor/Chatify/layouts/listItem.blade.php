
{{-- -------------------- Saved Messages -------------------- --}}
@if($get == 'saved')
    <table class="messenger-list-item" data-contact="{{ Auth::user()->id }}">
        <tr data-action="0">
            {{-- Avatar side --}}
            <td>
            <div class="saved-messages avatar av-m">
                <span class="far fa-bookmark"></span>
            </div>
            </td>
            {{-- center side --}}
            <td>
                <p data-id="{{ Auth::user()->id }}" data-type="user">Saved Messages <span>You</span></p>
                <span>Save messages secretly</span>
            </td>
        </tr>
    </table>
@endif

{{-- Example PHP file, e.g., contacts.php --}}
{{-- Assuming $get, $lastMessage, $user, $unseenCounter are defined --}}
{{-- Ensure $lastMessage is not null to avoid errors --}}
<?php
// Example PHP file handling contacts rendering
// Ensure data retrieval and initialization
if ($get == 'users' && !!$lastMessage) {
    // Processing last message body
    $lastMessageBody = mb_convert_encoding($lastMessage->body, 'UTF-8', 'UTF-8');
    $lastMessageBody = strlen($lastMessageBody) > 30 ? mb_substr($lastMessageBody, 0, 30, 'UTF-8').'..' : $lastMessageBody;
?>
    <table class="messenger-list-item" data-contact="{{ $user->id }}">
        <tr data-action="0">
            <td style="position: relative">
                <?php if ($user->active_status): ?>
                    <span class="activeStatus"></span>
                <?php endif; ?>
                <div class="avatar av-m" style="background-image: url('{{ $user->avatar }}');"></div>
            </td>
            <td>
                <p data-id="{{ $user->id }}" data-type="user">
                    {{ strlen($user->name) > 12 ? trim(substr($user->name, 0, 12)).'..' : $user->name }}
                    <span class="contact-item-time" data-time="{{ $lastMessage->created_at }}">{{ $lastMessage->timeAgo }}</span>
                </p>
                <span>
                    {!! $lastMessage->from_id == Auth::user()->id ? '<span class="lastMessageIndicator">You :</span>' : '' !!}
                    @if ($lastMessage->attachment == null)
                        {!! $lastMessageBody !!}
                    @else
                        <span class="fas fa-file"></span> Attachment
                    @endif
                </span>
                {!! $unseenCounter > 0 ? "<b>".$unseenCounter."</b>" : '' !!}
            </td>
        </tr>
    </table>
<?php } ?>



{{-- -------------------- Search Item -------------------- --}}
@if($get == 'search_item')
<table class="messenger-list-item" data-contact="{{ $user->id }}">
    <tr data-action="0">
        {{-- Avatar side --}}
        <td>
        <div class="avatar av-m"
        style="background-image: url('{{ $user->avatar }}');">
        </div>
        </td>
        {{-- center side --}}
        <td>
            <p data-id="{{ $user->id }}" data-type="user">
            {{ strlen($user->name) > 12 ? trim(substr($user->name,0,12)).'..' : $user->name }}
        </td>

    </tr>
</table>
@endif

{{-- -------------------- Shared photos Item -------------------- --}}
@if($get == 'sharedPhoto')
<div class="shared-photo chat-image" style="background-image: url('{{ $image }}')"></div>
@endif


