<div class="modal fade" id="showCommentModal" tabindex="-1" aria-labelledby="showCommentModalLabell">
    <div class="modal-dialog">
        <div class="modal-content">

            @if ($comments->isEmpty())
                <div class="modal-header">
                    <h5 class="modal-title" id="showCommentModalLabell">コメントを登録してください</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
                </div>                
                    <form action="{{ route('comments.store') }}" method="post">
                    @csrf
                <div class="modal-body">
                        <input type="text" class="form-control" name="comment">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>

            @else
            <div class="modal-header">
                <h5 class="modal-title" id="showCommentModalLabell">{{$user_name}}&nbsp;のコメント</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
            </div>
                @foreach ($comments as $comment)
                    <div class="col">     
                        <div class="card bg-light mb-2">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h4 class="card-title ms-1 mb-0">{{ $comment->comment }}</h4>
                                <div class="d-flex align-items-center">                                 
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle px-1 fs-5 fw-bold link-dark text-decoration-none menu-icon" id="dropdownCommentMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">︙</a>
                                        <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="dropdownCommentMenuLink">
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editCommentModal{{ $comment->id }}">編集</a></li>                                   
                                            <div class="dropdown-divider"></div>
                                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteCommentModal{{ $comment->id }}">削除</a></li>                                                                                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                           
                    </div>
                @endforeach           
            @endif          


                <div class="modal-footer">
                </div>
            </form>
        </div>
    </div>
</div>