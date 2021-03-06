/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr> 
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.model;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;

/**
 * FilterObject
 */

public class FilterObject {
  /**
   * The data type of the comparison variable as selected from this list
   */
  @JsonAdapter(TypeEnum.Adapter.class)
  public enum TypeEnum {
    STRING("string"),
    
    BOOLEAN("boolean"),
    
    NUMERIC("numeric"),
    
    DATE("date"),
    
    LIST("list");

    private String value;

    TypeEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static TypeEnum fromValue(String text) {
      for (TypeEnum b : TypeEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<TypeEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final TypeEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public TypeEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return TypeEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("type")
  private TypeEnum type = null;

  @SerializedName("value")
  private String value = null;

  /**
   * One of the BlueJeans meetings fields selected from this list to be used for comparison testing
   */
  @JsonAdapter(FieldEnum.Adapter.class)
  public enum FieldEnum {
    STARTTIME("startTime"),
    
    ENDTIME("endTime"),
    
    MEETINGUUID("meetingUUID"),
    
    USERID("userId"),
    
    ENTERPRISEID("enterpriseId");

    private String value;

    FieldEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static FieldEnum fromValue(String text) {
      for (FieldEnum b : FieldEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<FieldEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final FieldEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public FieldEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return FieldEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("field")
  private FieldEnum field = null;

  /**
   * A comparison operator selected from this list- less than, greater than, equal,and in
   */
  @JsonAdapter(ComparisonEnum.Adapter.class)
  public enum ComparisonEnum {
    LT("lt"),
    
    GT("gt"),
    
    EQ("eq"),
    
    IN("in");

    private String value;

    ComparisonEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static ComparisonEnum fromValue(String text) {
      for (ComparisonEnum b : ComparisonEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<ComparisonEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final ComparisonEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public ComparisonEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return ComparisonEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("comparison")
  private ComparisonEnum comparison = null;

  public FilterObject type(TypeEnum type) {
    this.type = type;
    return this;
  }

   /**
   * The data type of the comparison variable as selected from this list
   * @return type
  **/
  @ApiModelProperty(value = "The data type of the comparison variable as selected from this list")
  public TypeEnum getType() {
    return type;
  }

  public void setType(TypeEnum type) {
    this.type = type;
  }

  public FilterObject value(String value) {
    this.value = value;
    return this;
  }

   /**
   * Value for comparison testing.  A time field must be formatted as yyyy-mm-ddThh:mm:ss (gmt offset). Example 2018-05-10T23:59:00-07:00
   * @return value
  **/
  @ApiModelProperty(value = "Value for comparison testing.  A time field must be formatted as yyyy-mm-ddThh:mm:ss (gmt offset). Example 2018-05-10T23:59:00-07:00")
  public String getValue() {
    return value;
  }

  public void setValue(String value) {
    this.value = value;
  }

  public FilterObject field(FieldEnum field) {
    this.field = field;
    return this;
  }

   /**
   * One of the BlueJeans meetings fields selected from this list to be used for comparison testing
   * @return field
  **/
  @ApiModelProperty(value = "One of the BlueJeans meetings fields selected from this list to be used for comparison testing")
  public FieldEnum getField() {
    return field;
  }

  public void setField(FieldEnum field) {
    this.field = field;
  }

  public FilterObject comparison(ComparisonEnum comparison) {
    this.comparison = comparison;
    return this;
  }

   /**
   * A comparison operator selected from this list- less than, greater than, equal,and in
   * @return comparison
  **/
  @ApiModelProperty(value = "A comparison operator selected from this list- less than, greater than, equal,and in")
  public ComparisonEnum getComparison() {
    return comparison;
  }

  public void setComparison(ComparisonEnum comparison) {
    this.comparison = comparison;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    FilterObject filterObject = (FilterObject) o;
    return Objects.equals(this.type, filterObject.type) &&
        Objects.equals(this.value, filterObject.value) &&
        Objects.equals(this.field, filterObject.field) &&
        Objects.equals(this.comparison, filterObject.comparison);
  }

  @Override
  public int hashCode() {
    return Objects.hash(type, value, field, comparison);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class FilterObject {\n");
    
    sb.append("    type: ").append(toIndentedString(type)).append("\n");
    sb.append("    value: ").append(toIndentedString(value)).append("\n");
    sb.append("    field: ").append(toIndentedString(field)).append("\n");
    sb.append("    comparison: ").append(toIndentedString(comparison)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

