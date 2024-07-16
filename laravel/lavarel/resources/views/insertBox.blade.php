<div class="actionBox" id="insertBox">
    <p>Insert</p>
    <div class="name">
        <p>Name of the project</p>
        <input type="text" name="name" placeholder="Name:"></input>
    </div>
    <div class="desc">
        <p>Description of the project</p>
        <input type="text" name="desc" placeholder="Description"></input>
    </div>
    <div>
        <p>Is the project finished?</p>
        <select name="finished">
            <option value="True">Yes</option>
            <option value="False">No</option>
        </select>
    </div>
    <div>
        <p>Location of the project</p>
        <input type="text" name="location">
    </div>
    <div class="buttons">
        <button>Insert</button>
        <button onclick="hideInsert()">Cancel</button>
    </div>
</div>