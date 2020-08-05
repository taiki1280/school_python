<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class fmtConvertTime
    Inherits System.Windows.Forms.Form

    'フォームがコンポーネントの一覧をクリーンアップするために dispose をオーバーライドします。
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Windows フォーム デザイナーで必要です。
    Private components As System.ComponentModel.IContainer

    'メモ: 以下のプロシージャは Windows フォーム デザイナーで必要です。
    'Windows フォーム デザイナーを使用して変更できます。  
    'コード エディターを使って変更しないでください。
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.lblTime = New System.Windows.Forms.Label()
        Me.txtHour = New System.Windows.Forms.TextBox()
        Me.btnConvert = New System.Windows.Forms.Button()
        Me.btnExit = New System.Windows.Forms.Button()
        Me.txtMinute = New System.Windows.Forms.TextBox()
        Me.SuspendLayout()
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(106, 77)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(66, 18)
        Me.Label1.TabIndex = 0
        Me.Label1.Text = "時間(&H)"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(343, 80)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(49, 18)
        Me.Label2.TabIndex = 2
        Me.Label2.Text = "分(&M)"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(127, 166)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(139, 18)
        Me.Label3.TabIndex = 4
        Me.Label3.Text = "小数点の時間(D):"
        '
        'lblTime
        '
        Me.lblTime.AutoSize = True
        Me.lblTime.Location = New System.Drawing.Point(292, 166)
        Me.lblTime.Name = "lblTime"
        Me.lblTime.Size = New System.Drawing.Size(181, 18)
        Me.lblTime.TabIndex = 5
        Me.lblTime.Text = "時間と分を入力後Enter"
        '
        'txtHour
        '
        Me.txtHour.Location = New System.Drawing.Point(190, 77)
        Me.txtHour.Name = "txtHour"
        Me.txtHour.Size = New System.Drawing.Size(100, 25)
        Me.txtHour.TabIndex = 1
        '
        'btnConvert
        '
        Me.btnConvert.DialogResult = System.Windows.Forms.DialogResult.Cancel
        Me.btnConvert.Location = New System.Drawing.Point(130, 206)
        Me.btnConvert.Name = "btnConvert"
        Me.btnConvert.Size = New System.Drawing.Size(112, 54)
        Me.btnConvert.TabIndex = 6
        Me.btnConvert.Text = "変換(&V)"
        Me.btnConvert.UseVisualStyleBackColor = True
        '
        'btnExit
        '
        Me.btnExit.DialogResult = System.Windows.Forms.DialogResult.Cancel
        Me.btnExit.Location = New System.Drawing.Point(371, 206)
        Me.btnExit.Name = "btnExit"
        Me.btnExit.Size = New System.Drawing.Size(112, 54)
        Me.btnExit.TabIndex = 7
        Me.btnExit.Text = "終了(&X)"
        Me.btnExit.UseVisualStyleBackColor = True
        '
        'txtMinute
        '
        Me.txtMinute.Location = New System.Drawing.Point(398, 77)
        Me.txtMinute.Name = "txtMinute"
        Me.txtMinute.Size = New System.Drawing.Size(100, 25)
        Me.txtMinute.TabIndex = 3
        '
        'fmtConvertTime
        '
        Me.AcceptButton = Me.btnConvert
        Me.AutoScaleDimensions = New System.Drawing.SizeF(10.0!, 18.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.CancelButton = Me.btnExit
        Me.ClientSize = New System.Drawing.Size(607, 289)
        Me.Controls.Add(Me.txtMinute)
        Me.Controls.Add(Me.btnExit)
        Me.Controls.Add(Me.btnConvert)
        Me.Controls.Add(Me.txtHour)
        Me.Controls.Add(Me.lblTime)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle
        Me.MaximizeBox = False
        Me.MinimizeBox = False
        Me.Name = "fmtConvertTime"
        Me.Text = "Form1"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents lblTime As Label
    Friend WithEvents txtHour As TextBox
    Friend WithEvents btnConvert As Button

    Private Sub DoConvert(sender As Object, e As EventArgs) Handles btnConvert.Click
        Dim WorkingTime As Double
        Dim WorkingHour, WorkingMinute As Integer
        If (txtHour.Text.Length > 0 And txtHour.Text.Length > 0) Then
            WorkingHour = CInt(txtHour.Text)
            WorkingMinute = CInt(txtMinute.Text)
            WorkingTime = WorkingHour + WorkingMinute / 60
            lblTime.Text = WorkingTime.ToString()
        Else
            lblTime.Text = "正しい値を入力してください。"
        End If
    End Sub

    Friend WithEvents btnExit As Button
    Friend WithEvents txtMinute As TextBox

    Private Sub btnExit_Click(sender As Object, e As EventArgs) Handles btnExit.Click
        Application.Exit()
    End Sub
End Class
