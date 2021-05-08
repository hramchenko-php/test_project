<div class="tab-content">
    <div class="form-group">
        <label for="title">Заголовок</label>
        <input name="title" value="{{$item->title}}"
               id="title"
               type="text"
               class="form-control"
               minlength="3"
               required>
    </div>
    <div class="form-group">
        <label for="slug">Идентификатор</label>
        <input name="slug" value="{{$item->slug}}"
               id="title"
               type="text"
               class="form-control">
    </div>
    <div class="form-group">
        <label for="parent_id">Родитель</label>
        <input name="parent_id" value="{{$item->parent_id}}"
               id="title"
               type="text"
               class="form-control"
               placeholder="Выберете категорию"
               required>
    </div>
    <div class="form-group">
        <label for="parent_id">Родитель</label>
        <select name="parent_id"
                id="parent_id"
                class="form-control"
                placeholder="Выберете категорию">
            @foreach($categorylist as $categoryOption)
                <option value="{{$categoryOption->id}}" @if($categoryOption->id == $item->parent_id) selected @endif>
                    {{$categoryOption->id}}.{{$categoryOption->title}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea name="description"
                  id="description"
                  class="form-control"
                  rows="3">
            {{$item->description}}
        </textarea>
    </div>

</div>
